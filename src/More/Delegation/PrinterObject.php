<?php
/**
 * PrinterObject.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\Delegation;


/**
 * Class PrinterObject
 * @package DesignPatterns\More\Delegation
 */
final class PrinterObject implements PrinterInterface {

    /**
     * @var PrinterInterface
     */
    private $_printer;

    /**
     * PrinterObject constructor.
     * @param PrinterInterface $printer
     */
    final public function __construct(PrinterInterface $printer) {
        $this->_printer = $printer;
    }

    /**
     * @param string $message
     */
    final public function print(string $message): void {
        $this->_printer->print($message);
    }
}
