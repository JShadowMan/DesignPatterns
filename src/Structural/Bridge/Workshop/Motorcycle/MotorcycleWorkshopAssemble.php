<?php
/**
 * MotorcycleWorkshopAssemble.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Bridge\Workshop\Motorcycle;
use DesignPatterns\Structural\Bridge\Workshop\WorkshopInterface;


/**
 * Class MotorcycleWorkshopAssemble
 * @package DesignPatterns\Structural\Bridge\Workshop\Motorcycle
 */
final class MotorcycleWorkshopAssemble implements WorkshopInterface {
    /**
     * @inheritdoc
     */
    final public function work(): void {}
}
