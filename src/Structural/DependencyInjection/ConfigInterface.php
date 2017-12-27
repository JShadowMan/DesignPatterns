<?php
/**
 * ConfigInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\DependencyInjection;


/**
 * Interface ConfigInterface
 * @package DesignPatterns\Structural\DependencyInjection
 */
interface ConfigInterface {
    /**
     * @param string $key
     * @param null $default
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * @param string $key
     * @param $val
     */
    public function set(string $key, $val): void;
}
