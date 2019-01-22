<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpectatorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpectatorsTable Test Case
 */
class SpectatorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpectatorsTable
     */
    public $Spectators;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Spectators',
        'app.Events',
        'app.Tickets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Spectators') ? [] : ['className' => SpectatorsTable::class];
        $this->Spectators = TableRegistry::getTableLocator()->get('Spectators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Spectators);

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
