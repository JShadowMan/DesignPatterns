<?php
/**
 * MemoryComponent.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Facade\Component;


/**
 * Class MemoryComponent
 * @package DesignPatterns\Structural\Facade\Component
 */
final class MemoryComponent implements ComputerComponentInterface {
    /**
     * @return string
     */
    final public function power_on(): string {
        return '<memory>UP</memory>';
    }

    /**
     * @return string
     */
    final public function power_off(): string {
        return '<memory>DOWN</memory>';
    }
}
