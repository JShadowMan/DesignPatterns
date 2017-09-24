<?php
/**
 * AbstractDict.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/DesignPatterns
 */
namespace DesignPatterns\Creational\AbstractFactory\Component;


/**
 * Class AbstractDict
 * @package DesignPatterns\Creational\AbstractFactory\Component
 */
abstract class AbstractDict implements ComponentInterface {
    /**
     * @var array
     */
    protected $_keys;

    /**
     * @var array
     */
    protected $_values;

    /**
     * AbstractDict constructor.
     * @param array $keys
     * @param array $values
     */
    final public function __construct(array $keys, array $values) {
        if (count($keys) !== count($values)) {
            throw new \InvalidArgumentException("DictComponent keys/values size not match");
        }
        $this->_keys = array_values($keys);
        $this->_values = array_values($values);
    }
}
