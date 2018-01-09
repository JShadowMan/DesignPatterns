<?php
/**
 * ComputerFacadeInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Facade;


/**
 * Interface ComputerFacadeInterface
 * @package DesignPatterns\Structural\Facade
 */
interface ComputerFacadeInterface {
    /**
     * @return string
     */
    public function start_computer(): string;

    /**
     * @return string
     */
    public function shutdown_computer(): string;
}
