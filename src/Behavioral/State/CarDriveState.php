<?php
/**
 * CarDriveState.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\State;


/**
 * Class CarDriveState
 * @package DesignPatterns\Behavioral\State
 */
final class CarDriveState extends CarStateBase {
    /**
     * @inheritdoc
     */
    final public function neutral(): void {
        echo 'neutral';
    }
}