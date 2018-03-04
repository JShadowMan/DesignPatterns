<?php
/**
 * SimpleFactoryTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\SimpleFactory;
use \PHPUnit\Framework\TestCase;


/**
 * Class SimpleFactoryTest
 * @package DesignPatterns\Creational\SimpleFactory
 */
final class SimpleFactoryTest extends TestCase {
    /**
     * @var \DesignPatterns\Creational\SimpleFactory\ConcreteDumper
     */
    protected $_manager;

    /**
     * setUp the test environment
     */
    final protected function setUp(): void {
        $this->_manager = new ConcreteDumper();
    }

    /**
     * @return array
     */
    final public function dumper_provider(): array {
        return array(
            array('xml'),
            array('json')
        );
    }

    /**
     * @param $dumper_name
     * @dataProvider dumper_provider
     * @throws \Exception
     */
    final public function test_dump_array($dumper_name): void {
        $dumper = $this->_manager->create_dumper($dumper_name);

        $this->assertInstanceOf('\DesignPatterns\Creational\SimpleFactory\Dumper\DumperInterface', $dumper);
        $this->assertInternalType('string', $dumper->dump(array()));
        $this->assertInternalType('string', $dumper->dump(array('key' => 'value')));
    }

    /**
     * @expectedException \Exception
     */
    final public function test_invalid_dumper(): void {
        $this->_manager->create_dumper('invalid_dumper');
    }
}
