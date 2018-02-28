<?php
/**
 * StateContext.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\State;


/**
 * Class StateContext
 * @package DesignPatterns\Behavioral\State
 */
final class StateContext implements CarStateInterface {
    /**
     * @var CarStateInterface
     */
    private $_state;

    /**
     * @var array
     */
    private static $_states = array();

    /**
     * StateContext constructor.
     * @param CarStateInterface|null $init_state
     */
    final public function __construct(?CarStateInterface $init_state = null) {
        $this->_state = $init_state ?? new CarNullState($this);
        if (empty(self::$_states)) {
            self::$_states['start_engine'] = new CarStartEngineState($this);
            self::$_states['stop_engine'] = new CarStopEngineState($this);
            self::$_states['neutral'] = new CarNeutralState($this);
            self::$_states['drive'] = new CarDriveState($this);
        }
    }

    /**
     * @param CarStateInterface $state
     */
    final public function change_state(CarStateInterface $state): void {
        $this->_state = $state;
    }

    /**
     * @inheritdoc
     */
    final public function start_engine(): void {
        $this->_state->start_engine();
        $this->_state = self::$_states[__FUNCTION__];
    }

    /**
     * @inheritdoc
     */
    final public function stop_engine(): void {
        $this->_state->stop_engine();
        $this->_state = self::$_states[__FUNCTION__];
    }

    /**
     * @inheritdoc
     */
    final public function neutral(): void {
        $this->_state->neutral();
        $this->_state = self::$_states[__FUNCTION__];
    }

    /**
     * @inheritdoc
     */
    final public function drive(): void {
        $this->_state->drive();
        $this->_state = self::$_states[__FUNCTION__];
    }
}
