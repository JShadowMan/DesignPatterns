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
namespace DesignPatterns\More\Repository;


/**
 * Class UserObject
 * @package DesignPatterns\More\Repository
 */
class UserObject {
    /**
     * @var string
     */
    private $_name;

    /**
     * @var int
     */
    private $_age;

    /**
     * UserObject constructor.
     * @param string $name
     * @param int $age
     */
    final public function __construct(string $name, int $age) {
        $this->_name = $name;
        $this->_age = $age;
    }

    /**
     * @return string
     */
    final public function get_name(): string {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    final public function set_name(string $name): void {
        $this->_name = $name;
    }

    /**
     * @return int
     */
    final public function get_age(): int {
        return $this->_age;
    }

    /**
     * @param int $age
     */
    final public function set_age(int $age): void {
        $this->_age = $age;
    }
}
