<?php
/**
 * TemplateMethodTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class TemplateMethodTest
 */
final class TemplateMethodTest extends PHPUnit\Framework\TestCase {
    /**
     * add salt method test
     */
    final public function testAddSaltMethod(): void {
        $crypto = new \DesignPatterns\Behavioral\TemplateMethod\AddSaltPlainCrypto();
        $this->assertEquals("Jayson\1\2\4", $crypto->encrypt('Jayson'));
    }

    /**
     * bit shift method
     */
    final public function testShiftBitMethod(): void {
        $crypto = new \DesignPatterns\Behavioral\TemplateMethod\ShiftBitCrypto();
        $this->assertEquals("Kbztpo", $crypto->encrypt('Jayson'));
    }
}
