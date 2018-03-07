<?php
/**
 * ServiceLocatorTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class ServiceLocatorTest
 */
final class ServiceLocatorTest extends PHPUnit\Framework\TestCase {
    /**
     * service locator pattern test case
     */
    final public function testServiceLocatorPattern(): void {
        $service_locator = new \DesignPatterns\More\ServiceLocator\ServiceLocator();
        $service_locator->register_service('sms', \DesignPatterns\More\ServiceLocator\Service\SmsService::class);
        $service_locator->register_service('email', \DesignPatterns\More\ServiceLocator\Service\EMailService::class);

        $object_1 = $service_locator->get_service('sms');
        $this->assertEquals('sms service', $object_1->run_service());

        $object_2 = $service_locator->get_service('email');
        $this->assertEquals('e-mail service', $object_2->run_service());
    }
}