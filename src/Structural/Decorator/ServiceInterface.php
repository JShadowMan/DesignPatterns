<?php
/**
 * ServiceInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Decorator;


/**
 * Interface ServiceInterface
 * @package DesignPatterns\Strucral\Decorator
 */
interface ServiceInterface {
    /**
     * run current service
     */
    public function run();
}
