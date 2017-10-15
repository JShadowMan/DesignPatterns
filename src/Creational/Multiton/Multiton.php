<?php
/**
 * Multiton.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Multiton;


/**
 * Class Multiton
 * @package DesignPatterns\Creational\Multiton
 */
final class Multiton {
    /**
     * @var array
     */
    private static $_instances = array();

    /**
     * @var string
     */
    private $_logger_name;

    /**
     * Multiton constructor.
     * @param string $logger_name
     */
    final private function __construct(string $logger_name) {
        $this->_logger_name = $logger_name;
    }

    /**
     * Multiton clone constructor
     */
    final private function __clone() {}

    /**
     * wakeup from outside
     */
    final private function __wakeup() {}

    /**
     * @param string $logger_name
     * @return self
     */
    final public static function get_logger(string $logger_name) {
        if (!array_key_exists($logger_name, self::$_instances)) {
            self::$_instances[$logger_name] = new self($logger_name);
        }

        return self::$_instances[$logger_name];
    }

    /**
     * @return string
     */
    final public function get_logger_name(): string {
        return $this->_logger_name;
    }
}
