<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostAuthorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostAuthorsTable Test Case
 */
class PostAuthorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PostAuthorsTable
     */
    public $PostAuthors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PostAuthors',
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
        $config = TableRegistry::getTableLocator()->exists('PostAuthors') ? [] : ['className' => PostAuthorsTable::class];
        $this->PostAuthors = TableRegistry::getTableLocator()->get('PostAuthors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostAuthors);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
