<?php
/**
 * RequestCallbackService.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Decorator;


/**
 * Class RequestCallbackService
 * @package DesignPatterns\Structural\Decorator
 */
final class RequestCallbackService implements ServiceInterface {
    /**
     * @inheritdoc
     */
    final public function run() {
        // generate response with request parameters
        return '<response></response>';
    }
}
