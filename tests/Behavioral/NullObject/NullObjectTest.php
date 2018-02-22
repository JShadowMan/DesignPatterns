<?php
/**
 * NullObjectTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class NullObjectTest
 */
final class NullObjectTest extends PHPUnit\Framework\TestCase {
    /**
     * null object
     */
    final public function testNullObject(): void {
        $logger = new \DesignPatterns\Behavioral\NullObject\NullLogger();
        $logger->log('hello');
        $this->expectOutputString(null);

        $logger = new \DesignPatterns\Behavioral\NullObject\ConsoleLogger();
        $logger->log('hello');
        $this->expectOutputString('hello');
    }
}
