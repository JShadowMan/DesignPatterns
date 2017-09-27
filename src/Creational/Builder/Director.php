<?php
/**
 * Director.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Builder;
use DesignPatterns\Creational\Builder\Builder\BuilderInterface;
use DesignPatterns\Creational\Builder\Product\VehicleProductAbstract;


/**
 * Class Director
 * @package DesignPatterns\Creational\Builder
 */
final class Director {
    /**
     * @param BuilderInterface $builder
     * @return VehicleProductAbstract
     */
    final public function build(BuilderInterface $builder) {
        // create vehicle
        $builder->create_vehicle();

        // build vehicle
        $builder->build_bodywork();
        $builder->build_engine();
        $builder->build_gear_box();
        $builder->build_wheel();

        // output
        return $builder->get_vehicle();
    }
}
