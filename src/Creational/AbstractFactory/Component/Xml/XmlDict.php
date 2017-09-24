<?php
/**
 * XmlDict.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/DesignPatterns
 */
namespace DesignPatterns\Creational\AbstractFactory\Component\Xml;
use DesignPatterns\Creational\AbstractFactory\Component\AbstractDict;


/**
 * Class XmlDict
 * @package DesignPatterns\Creational\AbstractFactory\Component\Xml
 */
final class XmlDict extends AbstractDict {
    /**
     * @return string
     */
    final public function render() {
        $dom = new \DOMDocument('1.0');

        $root = $dom->createElement('dict');
        $dom->appendChild($root);

        for ($index = 0; $index < count($this->_keys); ++$index) {
            $node = $dom->createElement('item');

            $key_node = $dom->createElement('key', $this->_keys[$index]);
            $val_node = $dom->createElement('value', $this->_values[$index]);

            $node->appendChild($key_node);
            $node->appendChild($val_node);

            $root->appendChild($node);
        }

        return $dom->saveXML();
    }
}
