<?php
/**
 * UserObject.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Strategy;


/**
 * Class UserObject
 * @package DesignPatterns\Behavioral\Strategy
 */
final class UserObject implements UserObjectInterface {
    /**
     * @var int
     */
    private $_user_id;

    /**
     * @var string
     */
    private $_user_name;

    /**
     * UserObject constructor.
     * @param int $id
     * @param string $name
     */
    final public function __construct(int $id, string $name) {
        $this->_user_id = $id;
        $this->_user_name = $name;
    }

    /**
     * @return int
     */
    final public function get_id(): int {
        return $this->_user_id;
    }

    /**
     * @return string
     */
    final public function get_name(): string {
        return $this->_user_name;
    }
}
