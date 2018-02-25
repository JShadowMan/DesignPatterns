<?php
/**
 * UserObject.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Observer;
use SplObserver;


/**
 * Class UserObject
 * @package DesignPatterns\Behavioral\Observer
 */
final class UserObject implements \SplSubject {
    /**
     * @var array
     */
    private $_data;

    /**
     * @var \SplObjectStorage
     */
    private $_observers;

    /**
     * UserObject constructor.
     */
    final public function __construct() {
        $this->_data = array();
        $this->_observers = new \SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    final public function attach(SplObserver $observer): void {
        $this->_observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    final public function detach(SplObserver $observer): void {
        $this->_observers->detach($observer);
    }

    /**
     * notify observer update
     */
    final public function notify(): void {
        /* @var \SplObserver $observer */
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    final public function __set(string $name, $value): void {
        $this->_data[$name] = $value;
        $this->notify();
    }
}
