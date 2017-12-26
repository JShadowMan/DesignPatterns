<?php
/**
 * DecoratorTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class DecoratorTest
 */
final class DecoratorTest extends \PHPUnit\Framework\TestCase {
    /**
     * @var \DesignPatterns\Structural\Decorator\RequestCallbackService
     */
    private $_service;

    /**
     * @inheritdoc
     */
    final public function setUp() {
        parent::setUp();

        $this->_service = new \DesignPatterns\Structural\Decorator\RequestCallbackService();
    }

    /**
     * logger wrapper
     */
    final public function testLoggerWrapper() {
        $service = new \DesignPatterns\Structural\Decorator\LoggerDecorator($this->_service);
        $this->assertEquals(
            '<loggerServiceBefore/><response></response><loggerServiceAfter/>', $service->run());
        $this->assertInstanceOf(\DesignPatterns\Structural\Decorator\DecoratorBase::class, $service);
        $this->assertInstanceOf(\DesignPatterns\Structural\Decorator\ServiceInterface::class, $service);
    }

    /**
     * duplicate response test
     */
    final public function testDoubleDecorator() {
        $service = new \DesignPatterns\Structural\Decorator\LoggerDecorator($this->_service);
        $service = new \DesignPatterns\Structural\Decorator\DupDecorator($service);

        $single_response = '<loggerServiceBefore/><response></response><loggerServiceAfter/>';
        $this->assertEquals(sprintf('%s%s', $single_response, $single_response), $service->run());
        $this->assertInstanceOf(\DesignPatterns\Structural\Decorator\DecoratorBase::class, $service);
        $this->assertInstanceOf(\DesignPatterns\Structural\Decorator\ServiceInterface::class, $service);
    }
}
