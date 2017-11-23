<?php
/**
 * MultitonTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Multiton;
use \PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Multiton\Multiton;


/**
 * Class MultitonTest
 * @package PHPDesignPatterns\Creational\Multiton
 */
final class MultitonTest extends TestCase {
    /**
     * @return array
     */
    final public function getInstances(): array {
        return array(
            array(Multiton::get_logger('StreamLogger')),
            array(Multiton::get_logger('FileLogger')),
        );
    }

    /**
     * @dataProvider getInstances
     * @param Multiton $multiton
     */
    final public function testLogger(Multiton $multiton) {
        $this->assertInstanceOf('DesignPatterns\Creational\Multiton\Multiton', $multiton);
        $this->assertStringEndsWith('Logger', $multiton->get_logger_name());
    }
}
