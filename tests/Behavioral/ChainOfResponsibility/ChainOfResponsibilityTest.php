<?php
/**
 * ChainOfResponsibilityTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
use \DesignPatterns\Behavioral\ChainOfResponsibility\RequestObjectInterface;


/**
 * Class ChainOfResponsibilityTest
 */
final class ChainOfResponsibilityTest extends \PHPUnit\Framework\TestCase {
    /**
     * @var DesignPatterns\Behavioral\ChainOfResponsibility\DataProviderInterface
     */
    private $_provider_chain;

    /**
     * setup test environment
     */
    final public function setUp(): void {
        $this->_provider_chain = new \DesignPatterns\Behavioral\ChainOfResponsibility\RedisProvider();
        $this->_provider_chain->add_provider(new \DesignPatterns\Behavioral\ChainOfResponsibility\DatabaseProvider());
    }

    /**
     * test database provider
     */
    final public function testDatabaseProvider(): void {
        $request = new \DesignPatterns\Behavioral\ChainOfResponsibility\RequestObject('foo');

        $this->_provider_chain->fetch($request);
        /* @var $request \DesignPatterns\Behavioral\ChainOfResponsibility\RequestObject */
        $this->assertInstanceOf(\DesignPatterns\Behavioral\ChainOfResponsibility\DatabaseProvider::class,
            $request->get_provider_debug());
    }

    /**
     * test redis provider
     */
    final public function testRedisProvider(): void {
        $request = new \DesignPatterns\Behavioral\ChainOfResponsibility\RequestObject('bar');

        $result = $this->_provider_chain->fetch($request);
        $value_first = $request->get_value();
        /* @var $request \DesignPatterns\Behavioral\ChainOfResponsibility\RequestObject */
        $this->assertInstanceOf(\DesignPatterns\Behavioral\ChainOfResponsibility\DatabaseProvider::class,
            $request->get_provider_debug());

        $fetch_again = $this->_provider_chain->fetch($request);
        $value_second = $request->get_value();
        /* @var $request \DesignPatterns\Behavioral\ChainOfResponsibility\RequestObject */
        $this->assertInstanceOf(\DesignPatterns\Behavioral\ChainOfResponsibility\RedisProvider::class,
            $request->get_provider_debug());

        $this->assertEquals($result, $fetch_again);
        $this->assertEquals($value_first, $value_second);
    }
}