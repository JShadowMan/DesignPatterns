<?php
/**
 * XmlList.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\AbstractFactory\Component\Xml;
use DesignPatterns\Creational\AbstractFactory\Component\AbstractList;


/**
 * Class XmlList
 * @package DesignPatterns\Creational\AbstractFactory\Component\Xml
 */
final class XmlList extends AbstractList {
    /**
     * @return string
     */
    final public function render() {
        $dom = new \DOMDocument('1.0');

        $root = $dom->createElement('list');
        $dom->appendChild($root);

        foreach ($this->_list as $item) {
            $node = $dom->createElement('item', $item);
            $root->appendChild($node);
        }

        return $dom->saveXML();
    }
}
