<?php
/**
 * Motorcycle.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Bridge;
use DesignPatterns\Structural\Bridge\Vehicle\VehicleBase;
use DesignPatterns\Structural\Bridge\Workshop\WorkshopInterface;


/**
 * Class Motorcycle
 * @package DesignPatterns\Structural\Bridge
 */
final class MotorcycleVehicle extends VehicleBase {
    /**
     * @return bool
     */
    final public function manufacture(): bool {
        foreach ($this->get_work_shops() as $work_shop) {
            /* @var WorkshopInterface $work_shop */
            $work_shop->work();
        }

        return true;
    }
}
