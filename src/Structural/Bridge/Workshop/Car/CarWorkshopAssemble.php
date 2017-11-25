<?php
/**
 * CarWorkshopAssemble.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Bridge\Workshop\Car;
use DesignPatterns\Structural\Bridge\Workshop\WorkshopInterface;


/**
 * Class CarWorkshopAssemble
 * @package DesignPatterns\Structural\Bridge\Workshop\Car
 */
final class CarWorkshopAssemble implements WorkshopInterface {
    final public function work(): void {}
}
