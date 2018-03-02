<?php
/**
 * StrategyTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class StrategyTest
 */
final class StrategyTest extends PHPUnit\Framework\TestCase {
    /**
     * test strategy pattern
     */
    final public function testStrategyPattern(): void {
        $users = array(
            new \DesignPatterns\Behavioral\Strategy\UserObject(2, 'Bill'),
            new \DesignPatterns\Behavioral\Strategy\UserObject(1, 'Ana'),
            new \DesignPatterns\Behavioral\Strategy\UserObject(3, 'Cherry')
        );
        $user_collection = new \DesignPatterns\Behavioral\Strategy\UserCollection($users);

        $this->assertEquals(array(2, 1, 3), $user_collection->get_user_ids());
        $this->assertEquals(array('Bill', 'Ana', 'Cherry'), $user_collection->get_user_names());

        $collection_1 = clone $user_collection;
        $collection_1->sort(new \DesignPatterns\Behavioral\Strategy\UserIdComparator());
        $this->assertEquals(array(1, 2, 3), $collection_1->get_user_ids());

        $collection_2 = clone $user_collection;
        $collection_2->sort(new \DesignPatterns\Behavioral\Strategy\UserNameComparator());
        $this->assertEquals(array('Ana', 'Bill', 'Cherry'), $collection_2->get_user_names());
    }
}
