<?php
/**
 * AbstractFactory.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/DesignPatterns
 */
namespace DesignPatterns\Creational\AbstractFactory;


/**
 * Class AbstractFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory {
    /**
     * @param array $list
     */
    abstract public function create_list(array $list);

    /**
     * @param array $keys
     * @param array $values
     */
    abstract public function create_dict(array $keys, array $values);
}
