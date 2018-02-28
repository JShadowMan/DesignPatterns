<?php
/**
 * CarNeutralState.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\State;


/**
 * Class CarNeutralState
 * @package DesignPatterns\Behavioral\State
 */
final class CarNeutralState extends CarStateBase {
    /**
     * @inheritdoc
     */
    final public function drive(): void {
        echo 'drive';
    }

    /**
     * @inheritdoc
     */
    final public function stop_engine(): void {
        echo 'stop engine';
    }
}