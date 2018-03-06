<?php
/**
 * PrinterInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\Delegation;


/**
 * Interface PrinterInterface
 * @package DesignPatterns\More\Delegation
 */
interface PrinterInterface {
    /**
     * @param string $message
     */
    public function print(string $message): void;
}
