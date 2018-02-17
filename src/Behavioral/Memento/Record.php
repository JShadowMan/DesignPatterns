<?php
/**
 * Record.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Memento;


/**
 * Class Record
 * @package DesignPatterns\Behavioral\Memento
 */
final class Record {
    /**
     * @var mixed
     */
    private $_state;

    /**
     * Record constructor.
     * @param $state
     */
    final public function __construct($state) {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    final public function get_state() {
        return $this->_state;
    }
}
