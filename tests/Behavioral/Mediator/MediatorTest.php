<?php
/**
 * MediatorTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class MediatorTest
 */
final class MediatorTest extends PHPUnit\Framework\TestCase {
    /**
     * mediator pattern
     */
    final public function testMediator(): void {
        $char_room = new \DesignPatterns\Behavioral\Mediator\SimpleChatRoom();
        $user1 = new \DesignPatterns\Behavioral\Mediator\ChatUser('john', $char_room);
        $user2 = new \DesignPatterns\Behavioral\Mediator\ChatUser('jack', $char_room);

        $user1->send_message('hello, everyone');
        $this->expectOutputString("john: hello, everyone\n");

        $user2->send_message('hi');
        $this->expectOutputString("john: hello, everyone\njack: hi\n");
    }
}

