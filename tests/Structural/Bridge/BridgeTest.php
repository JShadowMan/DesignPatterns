<?php
/**
 * BeidgeTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class BridgeTest
 */
final class BridgeTest extends PHPUnit\Framework\TestCase {
    /**
     * @return array
     */
    final public function vehicle_provider(): array {
        return array(
            array(new \DesignPatterns\Structural\Bridge\CarVehicle(
                new \DesignPatterns\Structural\Bridge\Workshop\Car\CarWorkshopProduce(),
                new \DesignPatterns\Structural\Bridge\Workshop\Car\CarWorkshopAssemble(),
                new \DesignPatterns\Structural\Bridge\Workshop\Car\CarWorkshopDetect()
            )),
            array(new \DesignPatterns\Structural\Bridge\MotorcycleVehicle(
                new \DesignPatterns\Structural\Bridge\Workshop\Motorcycle\MotorcycleWorkshopProduce(),
                new \DesignPatterns\Structural\Bridge\Workshop\Motorcycle\MotorcycleWorkshopAssemble()
            ))
        );
    }

    /**
     * @param \DesignPatterns\Structural\Bridge\Vehicle\VehicleInterface $vehicle
     * @dataProvider vehicle_provider
     */
    final public function testVehicle(\DesignPatterns\Structural\Bridge\Vehicle\VehicleInterface $vehicle): void {
        $this->assertTrue($vehicle->manufacture());
    }
}
