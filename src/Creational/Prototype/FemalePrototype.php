<?php
/**
 * FemalePrototype.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Prototype;


/**
 * Class FemalePrototype
 * @package DesignPatterns\Creational\Prototype
 */
class FemalePrototype extends HumanPrototype {
    /**
     * FemalePrototype constructor.
     * @param string $name
     * @param int $age
     */
    final public function __construct($name, $age) {
        parent::__construct($name, self::HUMAN_GENDER_FEMALE, $age);
    }

    /**
     * clone female
     */
    final public function __clone() {
        $this->set_age(0);
    }
}