<?php
/**
 * ThreadWorker.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Pool\Worker;


/**
 * Class ThreadWorker
 * @package DesignPatterns\Creational\Pool\Worker
 */
final class ThreadWorker implements WorkerInterface {
    /**
     * @param callable $task
     * @param array ...$args
     * @return bool
     */
    public function run(callable $task, ...$args): bool {
        echo sprintf("[ThreadWorker:Slow]: %s", json_encode($args));
        sleep(.1);
        $task(...$args);
        return true;
    }
}
