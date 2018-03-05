<?php
/**
 * VisitorTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class VisitorTest
 */
final class VisitorTest extends PHPUnit\Framework\TestCase {
    /**
     * @var \DesignPatterns\Behavioral\Visitor\UserCollection
     */
    private $_collection;

    /**
     * test case setup
     */
    final public function setUp(): void {
        $this->_collection = new \DesignPatterns\Behavioral\Visitor\UserCollection();
        for ($i = 1; $i <= 10; ++$i) {
            $this->_collection->add_user(
                new \DesignPatterns\Behavioral\Visitor\UserObject($i, $i * 1000)
            );
        }
    }

    /**
     * test visitor gor boss
     */
    final public function testBossVisitor(): void {
        $boss = new \DesignPatterns\Behavioral\Visitor\BossVisitor();
        $this->_collection->accept_visitor($boss);

        $this->assertEquals(55, $boss->get_total_money());
    }

    /**
     * test visitor for producer
     */
    final public function testProducerVisitor(): void {
        $producer = new \DesignPatterns\Behavioral\Visitor\ProducerVisitor();
        $this->_collection->accept_visitor($producer);

        $this->assertTrue($producer->game_success());
    }
}
