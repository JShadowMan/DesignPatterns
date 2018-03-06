<?php
/**
 * RealPrinter.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\Delegation;


/**
 * Class RealPrinter
 * @package DesignPatterns\More\Delegation
 */
final class RealPrinter implements PrinterInterface {
    /**
     * @param string $message
     */
    public function print(string $message): void {
        echo $message . ' by real';
    }
}
