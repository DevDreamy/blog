<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostCategoriesTable Test Case
 */
class PostCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PostCategoriesTable
     */
    public $PostCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PostCategories',
        'app.Posts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PostCategories') ? [] : ['className' => PostCategoriesTable::class];
        $this->PostCategories = TableRegistry::getTableLocator()->get('PostCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostCategories);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
