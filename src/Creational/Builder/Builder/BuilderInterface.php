<?php
/**
 * BuilderInterface.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Builder\Builder;
use DesignPatterns\Creational\Builder\Product\VehicleProductAbstract;


/**
 * Interface BuilderInterface
 * @package DesignPatterns\Creational\Builder\Builder
 */
interface BuilderInterface {
    /**
     * create vehicle
     */
    public function create_vehicle();

    /**
     * build bodywork to vehicle
     */
    public function build_bodywork();

    /**
     * build wheels to vehicle
     */
    public function build_wheel();

    /**
     * build engine to vehicle
     */
    public function build_engine();

    /**
     * build gear box to vehicle
     */
    public function build_gear_box();

    /**
     * @return VehicleProductAbstract
     */
    public function get_vehicle();
}
