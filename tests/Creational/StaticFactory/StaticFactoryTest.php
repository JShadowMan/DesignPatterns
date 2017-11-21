<?php
/**
 * StaticFactoryTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class StaticFactoryTest
 */
final class StaticFactoryTest extends PHPUnit\Framework\TestCase {
    /**
     * test widget factory pattern
     */
    final public function testWidgetFactory(): void {
        $jwt = DesignPatterns\Creational\StaticFactory\WidgetFactory::factory('jwt');

        $this->assertInstanceOf('\DesignPatterns\Creational\StaticFactory\Widget\WidgetInterface', $jwt);
        $this->assertInternalType('array', $jwt->run(array()));
    }
}
