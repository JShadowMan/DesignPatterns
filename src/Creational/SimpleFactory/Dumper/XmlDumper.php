<?php
/**
 * XmlDumper.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\SimpleFactory\Dumper;


/**
 * Class XmlDumper
 * @package DesignPatterns\Creational\SimpleFactory\Dumper
 */
final class XmlDumper implements DumperInterface {
    /**
     * @param array $list
     * @return string
     */
    final public function dump(array $list): string {
        $dom = new \DOMDocument('1.0');

        $root = $dom->createElement('list');
        $dom->appendChild($root);

        foreach ($list as $key => $val) {
            $node = $dom->createElement($key, $val);
            $root->appendChild($node);
        }

        return $dom->saveXML();
    }
}
