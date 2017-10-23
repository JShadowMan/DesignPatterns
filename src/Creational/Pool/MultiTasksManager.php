<?php
/**
 * MultiTasksManager.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Pool;
use DesignPatterns\Creational\Pool\Container\PoolInterface;
use DesignPatterns\Creational\Pool\Container\WaitingPool;
use DesignPatterns\Creational\Pool\Worker\WaitingWorker;
use PHPUnit\Runner\Exception;


/**
 * Class MultiTasksManager
 * @package DesignPatterns\Creational\Pool
 */
final class MultiTasksManager {
    /**
     * @var PoolInterface
     */
    private $_worker_pool;

    /**
     * @var WaitingPool
     */
    private $_waiting;

    /**
     * MultiTasksManager constructor.
     * @param PoolInterface $pool
     * @param int $waiting_size
     */
    final public function __construct(PoolInterface $pool, int $waiting_size = 16) {
        $this->_worker_pool = $pool;
        $this->_waiting = new WaitingPool($waiting_size);
    }

    /**
     * @param callable $callback
     * @param callable $task
     * @param array ...$args
     * @return bool
     */
    final public function create_task(callable $callback, callable $task, ...$args): bool {
        // waiting queue
        if ($this->_worker_pool->is_full()) {
            if ($this->_waiting->is_full()) {
                throw new Exception('cannot process more');
            }

            $wait_task = new WaitingWorker();
            $wait_task->run(null, $callback, $task, $args);
            $this->_waiting->push($wait_task);
        }

        // exec
        $worker = $this->_worker_pool->pop();
        // async
        $worker->run($task, ...$args);
        // callback
        $callback();
        // dispose
        $this->_worker_pool->push($worker);

        if ($this->_worker_pool->get_size() !== 0) {
            /* @var WaitingWorker $worker */
            $worker = $this->_waiting->pop();
            $this->create_task(...$worker->get_args());
        }

        return true;
    }
}
