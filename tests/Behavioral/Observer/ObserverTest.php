<?php
/**
 * ObserverTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class ObserverTest
 */
final class ObserverTest extends PHPUnit\Framework\TestCase {
    /**
     * observer test-case
     */
    final public function testObserver(): void {
        $object = new \DesignPatterns\Behavioral\Observer\UserObject();
        $observer = new \DesignPatterns\Behavioral\Observer\UserObserver();

        $object->attach($observer);
        $object->time = time();
        $this->expectOutputString(sprintf("%s has updated",
            \DesignPatterns\Behavioral\Observer\UserObject::class));

        $object->detach($observer);
        $object->date = time();
        $this->expectOutputString(sprintf("%s has updated",
            \DesignPatterns\Behavioral\Observer\UserObject::class));
    }
}
