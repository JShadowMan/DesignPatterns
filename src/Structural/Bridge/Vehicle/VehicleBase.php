<?php
/**
 * VehicleBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Bridge\Vehicle;
use DesignPatterns\Structural\Bridge\Workshop\WorkshopInterface;


/**
 * Class VehicleBase
 * @package DesignPatterns\Structural\Bridge\Vehicle
 */
abstract class VehicleBase implements VehicleInterface {
    /**
     * @var WorkshopInterface[]
     */
    private $_workshops;

    /**
     * VehicleBase constructor.
     * @param WorkshopInterface[] ...$workshops
     */
    final public function __construct(WorkshopInterface ...$workshops) {
        $this->_workshops = $workshops;
    }

    /**
     * @return \ArrayIterator
     */
    final protected function get_work_shops(): \ArrayIterator {
        return new \ArrayIterator($this->_workshops);
    }
}
