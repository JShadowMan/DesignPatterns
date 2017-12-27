<?php
/**
 * DecoratorBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\DependencyInjection;


/**
 * Class ConfigStorageBase
 * @package DesignPatterns\Structural\DependencyInjection
 */
abstract class ConfigStorageBase {
    /**
     * @var array
     */
    private $_storage;

    /**
     * ConfigStorageBase constructor.
     */
    public function __construct() {
        $this->_storage = array();
    }

    /**
     * @param string $key
     * @param $val
     */
    final protected function set_item(string $key, $val): void {
        $this->_storage[$key] = $val;
    }

    /**
     * @param string $key
     * @param null $default
     * @return mixed|null
     */
    final protected function get_item(string $key, $default = null) {
        return $this->_storage[$key] ?? $default;
    }
}