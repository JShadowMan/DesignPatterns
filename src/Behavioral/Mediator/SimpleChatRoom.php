<?php
/**
 * SimpleChatRoom.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Mediator;


/**
 * Class SimpleChatRoom
 * @package DesignPatterns\Behavioral\Mediator
 */
final class SimpleChatRoom implements ChatRoomInterface {
    /**
     * @param string $username
     * @param string $message
     */
    final public function send_message(string $username, string $message): void {
        echo sprintf("%s: %s\n", $username, $message);
    }
}
