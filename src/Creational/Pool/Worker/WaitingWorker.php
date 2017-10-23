<?php
/**
 * WaitingWorker.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Pool\Worker;


/**
 * Class WaitingWorker
 * @package DesignPatterns\Creational\Pool\Worker
 */
final class WaitingWorker implements WorkerInterface {
    /**
     * @var array
     */
    private $_args;

    /**
     * @param callable $task
     * @param array ...$args
     * @return bool
     */
    final public function run(callable $task, ...$args): bool {
        $this->_args = $args;

        echo sprintf("[WaitingWorker]: new WaitingWorker()");
        return true;
    }

    /**
     * @return array
     */
    final public function get_args(): array {
        return $this->_args;
    }
}
