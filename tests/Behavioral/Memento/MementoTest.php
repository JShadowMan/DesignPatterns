<?php
/**
 * MementoTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class MementoTest
 */
final class MementoTest extends PHPUnit\Framework\TestCase {
    /**
     * memento pattern
     */
    final public function testMemento(): void {
        $browser = new \DesignPatterns\Behavioral\Memento\Browser('https://google.com');

        $browser->go('https://facebook.com');
        $browser->go('https://github.com');
        $browser->refresh('https://reddit.com');

        $this->assertEquals('https://github.com', $browser->back());
        $this->assertEquals('https://facebook.com', $browser->back());
    }
}
