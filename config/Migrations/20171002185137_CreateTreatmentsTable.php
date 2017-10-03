<?php
use Migrations\AbstractMigration;

class CreateTreatmentsTable extends AbstractMigration
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
        $table = $this->table('treatments');
        $table->addColumn('name', 'string', array('limit' => 150))
              ->addColumn('description', 'string')
              ->addColumn('total_cost', 'decimal', ['precision' => 5, 'scale' => 2, 'signed' => 'disable'])
              ->addColumn('payment_type', 'enum', array('values' => 'cash, dues'))
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
}
