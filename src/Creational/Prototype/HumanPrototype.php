<?php
/**
 * HumanPrototype.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Prototype;


/**
 * Class HumanPrototype
 * @package DesignPatterns\Creational\Prototype
 */
abstract class HumanPrototype {
    /**
     * @var string
     */
    private $_name;

    /**
     * @var int
     */
    private $_gender;

    /**
     * @var int
     */
    private $_age;

    /**
     * HumanPrototype constructor.
     * @param string $name
     * @param int $gender
     * @param int $age
     */
    function __construct(string $name, int $gender, int $age) {
        $this->_age = $age;
        $this->_name = $name;
        $this->_gender = $gender;
    }

    final public function set_name(string $name): void {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    final public function get_name(): string {
        return $this->_name;
    }

    /**
     * @return bool
     */
    final public function get_gender(): bool {
        return $this->_gender;
    }

    /**
     * @param int $age
     */
    final public function set_age(int $age): void {
        $this->_age = $age;
    }

    /**
     * @return int
     */
    final public function get_age(): int {
        return $this->_age;
    }

    /**
     * @return self
     */
    abstract public function __clone();

    /**
     * male type
     */
    const HUMAN_GENDER_MALE = 1;

    /**
     * female type
     */
    const HUMAN_GENDER_FEMALE = 0;
}
