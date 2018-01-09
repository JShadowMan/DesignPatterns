<?php
/**
 * CpuComponent.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Facade\Component;


/**
 * Class CpuComponent
 * @package DesignPatterns\Structural\Facade\Component
 */
final class CpuComponent implements ComputerComponentInterface {
    /**
     * @return string
     */
    final public function power_on(): string {
        return "<cpu>UP</cpu>";
    }

    /**
     * @return string
     */
    final public function power_off(): string {
        return "<cpu>DOWN</cpu>";
    }
}
