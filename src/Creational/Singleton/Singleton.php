<?php
/**
 * Singleton.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Singleton;


/**
 * Class Singleton
 * @package DesignPatterns\Creational\Singleton
 */
trait Singleton {
    /**
     * @var static
     */
    private static $_instance;

    /**
     * Singleton constructor.
     */
    final private function __construct() {}

    /**
     * @return static
     */
    final public static function get_instance(): self {
        if (self::$_instance === null) {
            self::$_instance = new static();
        }
        return self::$_instance;
    }

    /**
     * unserialize method
     */
    final private function __wakeup() {}

    /**
     * serialize method
     */
    final private function __sleep() {}

    /**
     * clone method
     */
    final private function __clone() {}
}
