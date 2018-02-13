<?php
/**
 * ChatUser.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Mediator;


/**
 * Class ChatUser
 * @package DesignPatterns\Behavioral\Mediator
 */
final class ChatUser {
    /**
     * @var string
     */
    private $_username;

    /**
     * @var ChatRoomInterface
     */
    private $_chat_room;

    /**
     * ChatUser constructor.
     * @param string $username
     * @param ChatRoomInterface $chat_room
     */
    final public function __construct(string $username, ChatRoomInterface $chat_room) {
        $this->_username = $username;
        $this->_chat_room = $chat_room;
    }

    /**
     * @param string $message
     */
    final public function send_message(string $message): void {
        $this->_chat_room->send_message($this->_username, $message);
    }
}
