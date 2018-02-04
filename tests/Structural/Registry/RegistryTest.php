<?php
/**
 * RegistryTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class RegistryTest
 */
final class RegistryTest extends \PHPUnit\Framework\TestCase {
    /**
     * set a logger and get a logger
     */
    final public function testRegistryPattern(): void {
        $logger_1 = $this->createMock(\DesignPatterns\Structural\Registry\LoggerInterface::class);
        $logger_2 = $this->createMock(\DesignPatterns\Structural\Registry\LoggerInterface::class);

        $this->assertInstanceOf(\DesignPatterns\Structural\Registry\LoggerInterface::class, $logger_1);
        $this->assertInstanceOf(\DesignPatterns\Structural\Registry\LoggerInterface::class, $logger_2);

        \DesignPatterns\Structural\Registry\LoggerRegistry::set_logger('logger_1', $logger_1);
        \DesignPatterns\Structural\Registry\LoggerRegistry::set_logger('logger_2', $logger_2);

        $this->assertEquals(\DesignPatterns\Structural\Registry\LoggerRegistry::get_logger('logger_1'), $logger_1);
        $this->assertEquals(\DesignPatterns\Structural\Registry\LoggerRegistry::get_logger('logger_2'), $logger_2);
    }
}
