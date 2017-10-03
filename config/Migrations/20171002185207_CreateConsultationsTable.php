<?php
use Migrations\AbstractMigration;

class CreateConsultationsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {

        $table = $this->table('consultations');
        $table->addColumn('diagnosis', 'string')
              ->addColumn('detail', 'string')
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->addColumn('user_id', 'integer', array('signed' => 'disable'))
              ->addColumn('patient_id', 'integer', array('signed' => 'disable'))
              ->addColumn('treatment_id', 'integer', array('signed' => 'disable'))
              ->addForeignKey('user_id', 'users', 'id', array('delete' => 'NO_ACTION', 'update'=> 'NO_ACTION'))
              ->addForeignKey('patient_id', 'patients', 'id', array('delete' => 'NO_ACTION', 'update'=> 'NO_ACTION'))
               ->addForeignKey('treatment_id', 'treatments', 'id', array('delete' => 'NO_ACTION', 'update'=> 'NO_ACTION'))
              ->create();
    }
}
