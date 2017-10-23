<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2017/10/23
 * Time: 23:25
 */
namespace DesignPatterns\Creational\Pool\Container;
use DesignPatterns\Creational\Pool\Worker\WorkerInterface;


/**
 * Interface PoolInterface
 * @package DesignPatterns\Creational\Pool\Pool
 */
interface PoolInterface {
    /**
     * @param WorkerInterface $worker
     */
    public function push(WorkerInterface $worker);

    /**
     * @return WorkerInterface
     */
    public function pop(): WorkerInterface;

    /**
     * @return bool
     */
    public function is_full(): bool;

    /**
     * @return int
     */
    public function get_size(): int;
}
