<?php
/**
 * GraphicsComponent.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Facade\Component;


/**
 * Class GraphicsComponent
 * @package DesignPatterns\Structural\Facade\Component
 */
final class GraphicsComponent implements ComputerComponentInterface {
    /**
     * @return string
     */
    final public function power_on(): string {
        return '<graphics>UP</graphics>';
    }

    /**
     * @return string
     */
    final public function power_off(): string {
        return '<graphics>DOWN</graphics>';
    }
}
