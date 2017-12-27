<?php
/**
 * YamlConfig.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\DependencyInjection;


/**
 * Class YamlConfig
 * @package DesignPatterns\Structural\DependencyInjection
 */
final class YamlConfig extends ConfigStorageBase implements ConfigInterface {
    /**
     * YamlConfig constructor.
     * @param $yaml_object
     */
    final public function __construct($yaml_object) {
        parent::__construct();
        // parsing yaml object
        $this->set_item('host', $yaml_object);
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