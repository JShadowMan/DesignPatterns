<?php
/**
 * VehicleProductAbstract * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Builder\Product;
use DesignPatterns\Creational\Builder\Component\ComponentAbstract;


/**
 * Class VehicleProductAbstract
 * @package DesignPatterns\Creational\Builder\Product
 */
abstract class VehicleProductAbstract {
    /**
     * @var array
     */
    protected $_components;

    /**
     * @param ComponentAbstract $component
     */
    final public function add_component(ComponentAbstract $component) {
        $this->_components[] = $component;
    }

    /**
     * @return array
     */
    final public function get_components() {
        return $this->_components;
    }
}
