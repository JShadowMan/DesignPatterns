<?php
/**
 * BikeBuilder.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Builder\Builder;
use DesignPatterns\Creational\Builder\Component\Bike\BikeBodywork;
use DesignPatterns\Creational\Builder\Component\Bike\BikeGearBox;
use DesignPatterns\Creational\Builder\Component\Bike\BikeWheel;
use DesignPatterns\Creational\Builder\Product\BikeProduct;
use DesignPatterns\Creational\Builder\Product\VehicleProductAbstract;


/**
 * Class BikeBuilder
 * @package DesignPatterns\Creational\Builder\Builder
 */
class BikeBuilder implements BuilderInterface {
    /**
     * @var VehicleProductAbstract
     */
    protected $_bike_vehicle;

    /**
     * create an bike vehicle
     */
    final public function create_vehicle() {
        $this->_bike_vehicle = new BikeProduct();
    }

    /**
     * @see BuilderInterface::build_bodywork()
     */
    final public function build_bodywork() {
        $this->_bike_vehicle->add_component(new BikeBodywork());
    }

    /**
     * @see BuilderInterface::build_wheel()
     */
    final public function build_wheel() {
        $this->_bike_vehicle->add_component(new BikeWheel());
        $this->_bike_vehicle->add_component(new BikeWheel());
    }

    /**
     * @see BuilderInterface::build_engine()
     */
    final public function build_engine() {
        // empty, bike has't engine
    }

    /**
     * @see BuilderInterface::build_gear_box()
     */
    final public function build_gear_box() {
        $this->_bike_vehicle->add_component(new BikeGearBox());
    }

    /**
     * @return VehicleProductAbstract
     */
    final public function get_vehicle() {
        return $this->_bike_vehicle;
    }
}
