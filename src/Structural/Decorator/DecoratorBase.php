<?php
/**
 * DecoratorBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Decorator;


/**
 * Class DecoratorBase
 * @package DesignPatterns\Structural\Decorator
 */
abstract class DecoratorBase implements ServiceInterface {
    /**
     * @var ServiceInterface
     */
    private $_service;

    /**
     * DecoratorBase constructor.
     * @param ServiceInterface $service
     */
    final public function __construct(ServiceInterface $service) {
        $this->_service = $service;
    }

    /**
     * @return mixed
     */
    final protected function _run_service() {
        return $this->_service->run();
    }
}
