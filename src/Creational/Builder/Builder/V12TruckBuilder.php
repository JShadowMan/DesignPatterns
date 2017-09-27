<?php
/**
 * V12TruckBuilder.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Builder\Builder;
use DesignPatterns\Creational\Builder\Component\Truch\TruckV12Engine;
use DesignPatterns\Creational\Builder\Component\Truch\TruckWheel;


/**
 * Class V12TruckBuilder
 * @package DesignPatterns\Creational\Builder\Builder
 */
class V12TruckBuilder extends TruckBuilder {
    /**
     * @see TruckBuilder::build_engine()
     */
    final public function build_engine() {
        $this->_truck_vehicle->add_component(new TruckV12Engine());
    }

    /**
     * @see TruckBuilder::build_wheel()
     */
    final public function build_wheel() {
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
    }
}
