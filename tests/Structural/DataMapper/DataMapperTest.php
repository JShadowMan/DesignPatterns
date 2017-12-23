<?php
/**
 * DataMapperTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class DataMapperTest
 */
final class DataMapperTest extends PHPUnit\Framework\TestCase {
    /**
     * insert new user
     */
    final public function testInsertUser() {
        $mapper = new \DesignPatterns\Structural\DataMapper\UserData\UserMapper();
        $user = new \DesignPatterns\Structural\DataMapper\UserData\User('1', 'Jack', 'jack@jack.com');
        $this->assertEquals('1', $user->get_user_id());
        $this->assertEquals('Jack', $user->get_username());
        $this->assertEquals('jack@jack.com', $user->get_email());
        $mapper->save($user);

        $user->set_user_id('2');
        $user->set_username('John');
        $user->set_email('john@john.com');

        $this->assertEquals('2', $user->get_user_id());
        $this->assertEquals('John', $user->get_username());
        $this->assertEquals('john@john.com', $user->get_email());
        $mapper->update($user);
    }
}
