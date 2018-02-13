<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2018/2/13
 * Time: 22:52
 */
namespace DesignPatterns\Behavioral\Mediator;


/**
 * Interface ChatRoomInterface
 * @package DesignPatterns\Behavioral\Mediator
 */
interface ChatRoomInterface {
    /**
     * @param string $username
     * @param string $message
     */
    public function send_message(string $username, string $message): void;
}
