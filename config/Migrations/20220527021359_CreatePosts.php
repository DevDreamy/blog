<?php
use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
{
    public function up()
    {
        $this->table('posts')
        ->addColumn('title', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ])
        ->addColumn('body', 'text', [
            'default' => null,
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('post_category_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ])
        ->addColumn('post_author_id', 'integer', [
            'default' => null,
            'limit' => 11,
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
        $this->table('posts')->drop()->save();
    }

}
