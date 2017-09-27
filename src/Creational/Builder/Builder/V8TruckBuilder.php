<?php
/**
 * V8TruckBuilder.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Builder\Builder;
use DesignPatterns\Creational\Builder\Component\Truch\TruckV8Engine;
use DesignPatterns\Creational\Builder\Component\Truch\TruckWheel;


/**
 * Class V8TruckBuilder
 * @package DesignPatterns\Creational\Builder\Builder
 */
final class V8TruckBuilder extends TruckBuilder {
    /**
     * @see TruckBuilder::build_engine()
     */
    final public function build_engine() {
        $this->_truck_vehicle->add_component(new TruckV8Engine());
    }

    /**
     * @see TruckBuilder::build_wheel()
     */
    final public function build_wheel() {
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
        $this->_truck_vehicle->add_component(new TruckWheel());
    }
}
