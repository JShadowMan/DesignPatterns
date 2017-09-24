<?php
/**
 * JsonDict.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\AbstractFactory\Component\Json;
use DesignPatterns\Creational\AbstractFactory\Component\AbstractDict;


/**
 * Class JsonDict
 * @package DesignPatterns\Creational\AbstractFactory\Component\Json
 */
final class JsonDict extends AbstractDict {
    /**
     * @return string
     */
    final public function render() {
        $dict = array_combine($this->_keys, $this->_values);
        return json_encode($dict);
    }
}
