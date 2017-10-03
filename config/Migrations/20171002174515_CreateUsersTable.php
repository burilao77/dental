<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('full_name', 'string', array('limit' => 150))
              ->addColumn('ci', 'string')
              ->addColumn('email', 'string', array('limit' => 150))
              ->addColumn('password', 'string')
              ->addColumn('phone', 'string')
              ->addColumn('photo', 'string')
              ->addColumn('photo_dir', 'string')
              ->addColumn('role', 'enum', array('values' => 'dentist, prosthesis'))
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
}
