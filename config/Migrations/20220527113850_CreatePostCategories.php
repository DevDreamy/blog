<?php
use Migrations\AbstractMigration;

class CreatePostCategories extends AbstractMigration
{
    public function up()
    {

        $this->table('post_categories')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 220,
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
        $this->table('post_categories')->drop()->save();
    }
}
