<?php
use Migrations\AbstractMigration;

class CreatePostAuthors extends AbstractMigration
{
    public function up()
    {
        $this->table('post_authors')
        ->addColumn('name', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ])
        ->addColumn('email', 'string', [
            'default' => null,
            'limit' => 320,
            'null' => false,
        ])
        ->addColumn('password', 'string', [
            'default' => null,
            'limit' => 60,
            'null' => false,
        ])
        ->addColumn('avatar', 'text', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('description', 'text', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => true,
        ])
        ->create();
    }

    public function down()
    {
        $this->table('post_authors')->drop()->save();
    }
}
