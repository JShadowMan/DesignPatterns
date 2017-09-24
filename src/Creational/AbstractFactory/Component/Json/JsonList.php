<?php
/**
 * JsonList.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\AbstractFactory\Component\Json;
use DesignPatterns\Creational\AbstractFactory\Component\AbstractList;


/**
 * Class JsonList
 * @package DesignPatterns\Creational\AbstractFactory\Component\Json
 */
final class JsonList extends AbstractList {
    /**
     * @return string
     */
    final public function render() {
        return json_encode($this->_list);
    }
}
