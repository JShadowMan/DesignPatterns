<?php
/**
 * CarWorkshopDetect.php
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
 * Class CarWorkshopDetect
 * @package DesignPatterns\Structural\Bridge\Workshop\Car
 */
final class CarWorkshopDetect implements WorkshopInterface {
    /**
     * @inheritdoc
     */
    public function work(): void {}
}
