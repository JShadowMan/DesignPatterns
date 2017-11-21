<?php
/**
 * WidgetInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\StaticFactory\Widget;


/**
 * Interface WidgetInterface
 * @package DesignPatterns\Creational\StaticFactory\Widget
 */
interface WidgetInterface {
    /**
     * @param array $options
     * @return array
     */
    public function run(array $options): array;
}
