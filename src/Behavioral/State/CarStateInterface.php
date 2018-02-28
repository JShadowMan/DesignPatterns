<?php
/**
 * AndSpecification.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\State;


/**
 * Interface CarStateInterface
 * @package DesignPatterns\Behavioral\State
 */
interface CarStateInterface {
    /**
     * start car engine
     */
    public function start_engine(): void;

    /**
     * stop car engine
     */
    public function stop_engine(): void;

    /**
     * neutral mode
     */
    public function neutral(): void;

    /**
     * drive mode
     */
    public function drive(): void;
}
