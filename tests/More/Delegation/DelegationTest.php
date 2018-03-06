<?php
/**
 * DelegationTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class DelegationTest
 */
final class DelegationTest extends PHPUnit\Framework\TestCase {
    /**
     * delegation test case
     */
    final public function testDelegationPattern(): void {
        $real_printer = new \DesignPatterns\More\Delegation\RealPrinter();
        $printer = new \DesignPatterns\More\Delegation\PrinterObject($real_printer);

        $this->assertEquals($real_printer->print('ABC'), $printer->print('ABC'));
    }
}
