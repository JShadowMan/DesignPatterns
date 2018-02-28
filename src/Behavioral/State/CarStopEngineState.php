<?php
/**
 * CarStopEngineState.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\State;


/**
 * Class CarStopEngineState
 * @package DesignPatterns\Behavioral\State
 */
final class CarStopEngineState extends CarStateBase {
    /**
     * @inheritdoc
     */
    final public function start_engine(): void {
        echo 'start engine';
    }
}
