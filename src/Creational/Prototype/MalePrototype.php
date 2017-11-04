<?php
/**
 * MalePrototype.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Prototype;


/**
 * Class MalePrototype
 * @package DesignPatterns\Creational\Prototype
 */
class MalePrototype extends HumanPrototype {
    /**
     * MalePrototype constructor.
     * @param string $name
     * @param int $age
     */
    final public function __construct($name, $age) {
        parent::__construct($name, self::HUMAN_GENDER_MALE, $age);
    }

    /**
     * clone male
     */
    final public function __clone() {
        $this->set_age(0);
    }
}
