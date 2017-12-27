<?php
/**
 * ArrayConfig.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\DependencyInjection;


/**
 * Class ArrayConfig
 * @package DesignPatterns\Structural\DependencyInjection
 */
class ArrayConfig extends ConfigStorageBase implements ConfigInterface {
    /**
     * ArrayConfig constructor.
     * @param array $init_data
     */
    final public function __construct(array $init_data) {
        parent::__construct();

        foreach ($init_data as $key => $val) {
            $this->set($key, $val);
        }
    }

    /**
     * @param string $key
     * @param null $default
     * @return mixed|null
     */
    final public function get(string $key, $default = null) {
        return $this->get_item($key, $default);
    }

    /**
     * @param string $key
     * @param $val
     */
    final public function set(string $key, $val): void {
        $this->set_item($key, $val);
    }
}