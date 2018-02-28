<?php
/**
 * CarStartEngineState.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\State;


/**
 * Class CarStartEngineState
 * @package DesignPatterns\Behavioral\State
 */
final class CarStartEngineState extends CarStateBase {
    /**
     * @inheritdoc
     */
    final public function drive(): void {
        echo 'drive';
    }

    /**
     * @inheritdoc
     */
    final public function neutral(): void {
        echo 'neutral';
    }

    /**
     * @inheritdoc
     */
    final public function stop_engine(): void {
        echo 'stop engine';
    }
}
