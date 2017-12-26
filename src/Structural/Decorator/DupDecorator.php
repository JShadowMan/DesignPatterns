<?php
/**
 * DupDecorator.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Decorator;


/**
 * Class DupDecorator
 * @package DesignPatterns\Structural\Decorator
 */
final class DupDecorator extends DecoratorBase {
    /**
     * @return string
     */
    public function run(): string {
        $result = $this->_run_service();
        return $result . $result;
    }
}
