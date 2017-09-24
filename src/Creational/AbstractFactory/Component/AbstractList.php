<?php
/**
 * AbstractList.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/DesignPatterns
 */
namespace DesignPatterns\Creational\AbstractFactory\Component;


/**
 * Class AbstractList
 * @package DesignPatterns\Creational\AbstractFactory\Component
 */
abstract class AbstractList implements ComponentInterface {
    /**
     * @var array
     */
    protected $_list;

    /**
     * AbstractList constructor.
     * @param array $list
     */
    final public function __construct(array $list) {
        $this->_list = array_values($list);
    }
}
