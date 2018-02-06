<?php
/**
 * WidgetFactory.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\StaticFactory;
use DesignPatterns\Creational\StaticFactory\Widget\JwtWidget;
use DesignPatterns\Creational\StaticFactory\Widget\WidgetInterface;


/**
 * Class WidgetFactory
 * @package DesignPatterns\Creational\StaticFactory
 */
final class WidgetFactory {
    /**
     * @param string $widget_name
     * @return WidgetInterface
     */
    final public static function factory(string $widget_name): WidgetInterface {
        switch ($widget_name) {
            case 'jwt':
                return new JwtWidget();
        }
    }
}
