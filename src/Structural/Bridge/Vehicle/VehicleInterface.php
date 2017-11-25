<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2017/11/26
 * Time: 16:04
 */
namespace DesignPatterns\Structural\Bridge\Vehicle;


/**
 * Interface VehicleInterface
 * @package DesignPatterns\Structural\Bridge
 */
interface VehicleInterface {
    /**
     * @return bool
     */
    public function manufacture(): bool;
}
