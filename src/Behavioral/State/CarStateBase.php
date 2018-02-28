<?php
/**
 * CarStateBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\State;


/**
 * Class CarStateBase
 * @package DesignPatterns\Behavioral\State
 */
abstract class CarStateBase implements CarStateInterface {
    /**
     * @var StateContext
     */
    private $_context;

    /**
     * CarStateBase constructor.
     * @param StateContext $context
     */
    final public function __construct(StateContext $context) {
        $this->_context = $context;
    }

    /**
     * @inheritdoc
     */
    public function start_engine(): void {}

    /**
     * @inheritdoc
     */
    public function stop_engine(): void {}

    /**
     * @inheritdoc
     */
    public function drive(): void {}

    /**
     * @inheritdoc
     */
    public function neutral(): void {}
}
