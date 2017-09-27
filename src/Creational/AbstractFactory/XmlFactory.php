<?php
/**
 * XmlFactory.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/DesignPatterns
 */
namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Component\ComponentInterface;
use DesignPatterns\Creational\AbstractFactory\Component\Xml\XmlDict;
use DesignPatterns\Creational\AbstractFactory\Component\Xml\XmlList;


/**
 * Class XmlFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
final class XmlFactory extends AbstractFactory {
    /**
     * @param array $list
     * @return ComponentInterface
     */
    final public function create_list(array $list) {
        return new XmlList($list);
    }

    /**
     * @param array $keys
     * @param array $values
     * @return ComponentInterface
     */
    final public function create_dict(array $keys, array $values) {
        return new XmlDict($keys, $values);
    }
}
