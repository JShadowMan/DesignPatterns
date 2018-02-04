<?php
/**
 * LoggerRegistry.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Registry;


/**
 * Class LoggerRegistry
 * @package DesignPatterns\Structural\Registry
 */
final class LoggerRegistry {
    /**
     * @var LoggerInterface[]
     */
    private static $_loggers = array();

    /**
     * @param string $name
     * @param LoggerInterface $logger
     */
    final public static function set_logger(string $name, LoggerInterface $logger): void {
        self::$_loggers[$name] = $logger;
    }

    /**
     * @param string $name
     * @param LoggerInterface|null $default
     * @return LoggerInterface
     */
    final public static function get_logger(string $name, ?LoggerInterface $default = null): LoggerInterface {
        return self::$_loggers[$name] ?? $default;
    }
}
