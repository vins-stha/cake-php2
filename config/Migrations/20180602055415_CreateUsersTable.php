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
      $table = $this->table('users_table');
       $table->addColumn('created', 'datetime')
             ->update();
       $this->addColumn('modified',['type' => 'datetime']);
            ->update();
    }
}
