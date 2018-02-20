<?php
/**
 * NullLogger.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\NullObject;


/**
 * Class NullLogger
 * @package DesignPatterns\Behavioral\NullObject
 */
final class NullLogger implements LoggerInterface {
    /**
     * @param string $message
     */
    final public function log(string $message): void {}
}
