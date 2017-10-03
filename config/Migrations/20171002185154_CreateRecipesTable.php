<?php
use Migrations\AbstractMigration;

class CreateRecipesTable extends AbstractMigration
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
        $table = $this->table('recipes');
        $table->addColumn('detail', 'string')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->addColumn('treatment_id', 'integer', array('signed' => 'disable'))
              ->addForeignKey('treatment_id', 'treatments', 'id', array('delete' => 'NO_ACTION', 'update'=> 'NO_ACTION'))
              ->create();
    }
}
