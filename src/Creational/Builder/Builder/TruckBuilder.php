<?php
/**
 * TruckBuilder.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Builder\Builder;
use DesignPatterns\Creational\Builder\Component\Truch\TruckBodywork;
use DesignPatterns\Creational\Builder\Component\Truch\TruckGearBox;
use DesignPatterns\Creational\Builder\Product\TruckProduct;
use DesignPatterns\Creational\Builder\Product\VehicleProductAbstract;


/**
 * Class TruckBuilder
 * @package DesignPatterns\Creational\Builder\Builder
 */
abstract class TruckBuilder implements BuilderInterface {
    /**
     * @var VehicleProductAbstract
     */
    protected $_truck_vehicle;

    /**
     * create an bike vehicle
     */
    public function create_vehicle() {
        $this->_truck_vehicle = new TruckProduct();
    }

    /**
     * @see BuilderInterface::build_bodywork()
     */
    final public function build_bodywork() {
        $this->_truck_vehicle->add_component(new TruckBodywork());
    }

    /**
     * @see BuilderInterface::build_gear_box()
     */
    final public function build_gear_box() {
        $this->_truck_vehicle->add_component(new TruckGearBox());
    }

    /**
     * @return VehicleProductAbstract
     */
    final public function get_vehicle() {
        return $this->_truck_vehicle;
    }
}
