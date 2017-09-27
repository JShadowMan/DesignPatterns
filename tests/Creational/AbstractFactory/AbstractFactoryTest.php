<?php
/**
 * AbstractFactoryTest.php
 *
 * @package   DesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/DesignPatterns
 */
namespace DesignPatternsTest\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Component\Json\JsonDict;
use DesignPatterns\Creational\AbstractFactory\Component\Json\JsonList;
use DesignPatterns\Creational\AbstractFactory\Component\Xml\XmlDict;
use DesignPatterns\Creational\AbstractFactory\Component\Xml\XmlList;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\AbstractFactory\XmlFactory;


/**
 * Class AbstractFactoryTest
 * @package DesignPatterns
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase {
    /**
     * @return array
     */
    final public function getFactories() {
        return array(
            array(new JsonFactory()),
            array(new XmlFactory())
        );
    }

    /**
     * @param AbstractFactory $factory
     * @dataProvider getFactories
     */
    final public function testFactoryCreational(AbstractFactory $factory) {
        $data = array(
            $factory->create_list(array('one', 'two', 'three')),
            $factory->create_dict(array('key1', 'key2'), array('val1', 'val2'))
        );

        $this->assertContainsOnly('DesignPatterns\Creational\AbstractFactory\Component\ComponentInterface', $data);
    }

    /**
     * @param AbstractFactory $factory
     * @dataProvider getFactories
     */
    final public function testListComponentRender(AbstractFactory $factory) {
        $except_list = array('one', 'two');

        $factory_list = $factory->create_list($except_list);
        if ($factory_list instanceof JsonList) {
            $this->assertEquals($except_list, json_decode($factory_list->render(), true));
        } else if ($factory_list instanceof XmlList) {
            $xml_array = json_decode(
                json_encode(
                    simplexml_load_string($factory_list->render(), 'SimpleXMLElement', LIBXML_NOCDATA)
                ), true);
            $this->assertEquals($except_list, $xml_array['item']);
        }
    }

    /**
     * @param AbstractFactory $factory
     * @dataProvider getFactories
     */
    final public function testDictComponentRender(AbstractFactory $factory) {
        $except_dict = array('key1' => 'val1', 'key2' => 'val2');

        $factory_dict = $factory->create_dict(array_keys($except_dict), array_values($except_dict));
        if ($factory_dict instanceof JsonDict) {
            $this->assertEquals($except_dict, json_decode($factory_dict->render(), true));
        } else if ($factory_dict instanceof XmlDict) {
            $xml_array = json_decode(
                json_encode(
                    simplexml_load_string($factory_dict->render(), 'SimpleXMLElement', LIBXML_NOCDATA)
                ), true);
            $xml_array = array_map(function($array) {
                return array($array['key'] => $array['value']);
            }, $xml_array['item']);
            $this->assertEquals($except_dict, array_merge(...$xml_array));
        }
    }

    /**
     * @param AbstractFactory $factory
     * @dataProvider getFactories
     * @expectedException InvalidArgumentException
     */
    final public function testInvalidDictComponent(AbstractFactory $factory) {
        $factory->create_dict(array('key1', 'key2'), array('val1'));
    }
}
