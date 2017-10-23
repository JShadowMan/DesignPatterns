<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2017/10/23
 * Time: 23:30
 */
namespace DesignPatterns\Creational\Pool\Worker;


/**
 * Interface WorkInterface
 * @package DesignPatterns\Creational\Pool\Work
 */
interface WorkerInterface {
    /**
     * @param callable $task
     * @param array ...$args
     * @return bool
     */
    public function run(callable $task, ...$args): bool;
}
