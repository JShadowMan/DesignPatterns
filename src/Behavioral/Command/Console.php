<?php
/**
 * Console.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Command;


/**
 * Class Console
 * @package DesignPatterns\Behavioral\Command
 */
final class Console {
    /**
     * @param string $message
     * @return int
     */
    final public function print_string(string $message): int {
        echo $message;
        return 0;
    }
}
