<?php
/**
 * ComputerComponentInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Facade\Component;


/**
 * Class ComputerComponentInterface
 * @package DesignPatterns\Structural\Facade\Component
 */
interface ComputerComponentInterface {
    /**
     * @return string
     */
    public function power_on(): string;

    /**
     * @return string
     */
    public function power_off(): string;
}
