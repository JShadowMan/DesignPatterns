<?php
/**
 * UserObserver.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Observer;
use SplSubject;


/**
 * Class UserObserver
 * @package DesignPatterns\Behavioral\Observer
 */
final class UserObserver implements \SplObserver {
    /**
     * @param SplSubject $subject
     */
    final public function update(SplSubject $subject) {
        echo sprintf("%s has updated", get_class($subject));
    }
}
