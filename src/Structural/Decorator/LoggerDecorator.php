<?php
/**
 * LoggerDecorator.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Decorator;


/**
 * Class LoggerDecorator
 * @package DesignPatterns\Structural\Decorator
 */
final class LoggerDecorator extends DecoratorBase {
    /**
     * @inheritdoc
     */
    final public function run() {
        return sprintf("%s%s%s", $this->_run_service_before(), $this->_run_service(), $this->_run_service_after());
    }

    /**
     * @return string
     */
    final private function _run_service_before(): string {
        return '<loggerServiceBefore/>';
    }

    /**
     * @return string
     */
    final private function _run_service_after(): string {
        return '<loggerServiceAfter/>';
    }
}
