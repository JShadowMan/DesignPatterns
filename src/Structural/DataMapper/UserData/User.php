<?php
/**
 * User.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\DataMapper\UserData;
use DesignPatterns\Structural\DataMapper\Model;


/**
 * Class User
 * @package DesignPatterns\Structural\DataMapper
 */
final class User extends Model {
    /**
     * @var string
     */
    private $_user_id;

    /**
     * @var string
     */
    private $_username;

    /**
     * @var string
     */
    private $_email;

    /**
     * User constructor.
     * @param string $id
     * @param string $username
     * @param string $email
     */
    final public function __construct(string $id, string $username, string $email) {
        $this->_user_id = $id;
        $this->_username = $username;
        $this->_email = $email;
    }

    /**
     * @return string
     */
    final public function get_user_id(): string {
        return $this->_user_id;
    }

    /**
     * @param string $user_id
     */
    final public function set_user_id(string $user_id): void {
        $this->_user_id = $user_id;
    }

    /**
     * @return string
     */
    final public function get_username(): string {
        return $this->_username;
    }

    /**
     * @param string $username
     */
    final public function set_username(string $username): void {
        $this->_username = $username;
    }

    /**
     * @return string
     */
    final public function get_email(): string {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    final public function set_email(string $email): void {
        $this->_email = $email;
    }
}
