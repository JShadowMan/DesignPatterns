<?php
/**
 * ConsoleLogger.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\NullObject;


/**
 * Class ConsoleLogger
 * @package DesignPatterns\Behavioral\NullObject
 */
final class ConsoleLogger implements LoggerInterface {
    /**
     * @param string $message
     */
    final public function log(string $message): void {
        echo $message;
    }
}
