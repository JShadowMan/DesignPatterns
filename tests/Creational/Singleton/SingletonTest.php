<?php
/**
 * SingletonTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class SingletonTest
 * @package DesignPatterns\Creational\Singleton
 */
final class SingletonTest extends \PHPUnit\Framework\TestCase {
    /**
     * `MysqlConnection` test case
     */
    final public function testMysqlConnection(): void {
        $mysql_connection = \DesignPatterns\Creational\Singleton\MysqlConnection::get_instance();
        $this->assertInstanceOf('\DesignPatterns\Creational\Singleton\MysqlConnection', $mysql_connection);

        $the_same_connection = \DesignPatterns\Creational\Singleton\MysqlConnection::get_instance();
        $this->assertSame($the_same_connection, $mysql_connection);
    }

    /**
     * `StreamLogger` test case
     */
    final public function testStreamLogger(): void {
        $stream_logger = \DesignPatterns\Creational\Singleton\StreamLogger::get_instance();
        $this->assertInstanceOf('\DesignPatterns\Creational\Singleton\StreamLogger', $stream_logger);
    }
}
