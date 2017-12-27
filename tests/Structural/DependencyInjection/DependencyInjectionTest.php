<?php
/**
 * DependencyInjectionTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class DependencyInjectionTest
 */
class DependencyInjectionTest extends \PHPUnit\Framework\TestCase {
    /**
     * @return array
     */
    final public function config_provider(): array {
        return array(
            array(new \DesignPatterns\Structural\DependencyInjection\ArrayConfig(array('host' => 'localhost'))),
            array(new \DesignPatterns\Structural\DependencyInjection\YamlConfig('localhost'))
        );
    }

    /**
     * @dataProvider config_provider
     * @param \DesignPatterns\Structural\DependencyInjection\ConfigInterface $config
     */
    final public function testConfigInjection(\DesignPatterns\Structural\DependencyInjection\ConfigInterface $config): void {
        $this->assertEquals('localhost', $config->get('host'));
        $this->assertEquals(null, $config->get('port'));

        $config->set('port', 3306);
        $this->assertEquals(3306, $config->get('port'));
    }
}
