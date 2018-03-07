<?php
/**
 * ServiceInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\ServiceLocator\Service;


/**
 * Interface ServiceInterface
 * @package DesignPatterns\More\ServiceLocator
 */
interface ServiceInterface {
    /**
     * @return mixed
     */
    public function run_service();
}
