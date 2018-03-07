<?php
/**
 * SmsService.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\ServiceLocator\Service;


/**
 * Class SmsService
 * @package DesignPatterns\More\ServiceLocator\Service
 */
final class SmsService implements ServiceInterface {
    /**
     * @return string
     */
    final public function run_service(): string {
        return 'sms service';
    }
}
