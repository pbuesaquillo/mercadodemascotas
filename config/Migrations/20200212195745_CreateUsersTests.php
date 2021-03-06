<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersTests extends AbstractMigration
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
        $table = $this->table('users_tests');
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('test_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('message', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->addColumn('url_approle', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('active', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->addForeignkey("username","users","username",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->addForeignkey("test_id","tests","id",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->create();
    }
}
