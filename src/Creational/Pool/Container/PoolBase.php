<?php
/**
 * PoolBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Pool\Container;
use DesignPatterns\Creational\Pool\Worker\WorkerInterface;
use PHPUnit\Runner\Exception;


/**
 * Class PoolBase
 * @package DesignPatterns\Creational\Pool\Container
 */
abstract class PoolBase implements PoolInterface {
    /**
     * @var int
     */
    private $_current_size;

    /**
     * @var int
     */
    private $_max_size;

    /**
     * @var array
     */
    private $_workers;

    /**
     * PoolBase constructor.
     * @param int $max_size
     */
    final public function __construct(int $max_size) {
        $this->_current_size = 0;
        $this->_max_size = $max_size;
    }

    /**
     * @param WorkerInterface $worker
     */
    final public function push(WorkerInterface $worker) {
        if (++$this->_current_size > $this->_max_size) {
            throw new Exception('full pool');
        }

        $this->_workers[] = $worker;
    }

    /**
     * @return WorkerInterface
     */
    final public function pop(): WorkerInterface {
        if (empty($this->_workers)) {
            throw new Exception('empty pool');
        }

        return array_pop($this->_workers);
    }

    /**
     * @return bool
     */
    final public function is_full(): bool {
        return $this->_current_size < $this->_max_size;
    }

    /**
     * @return int
     */
    final public function get_size(): int {
        return count($this->_workers);
    }
}
