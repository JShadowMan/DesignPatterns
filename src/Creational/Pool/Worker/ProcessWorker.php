<?php
/**
 * ProcessWorker.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Pool\Worker;


/**
 * Class ProcessWorker
 * @package DesignPatterns\Creational\Pool\Worker
 */
final class ProcessWorker implements WorkerInterface {
    /**
     * @param callable $task
     * @param array ...$args
     * @return bool
     */
    final public function run(callable $task, ...$args): bool {
        echo sprintf("[ThreadWorker:Fast]: %s", json_encode($args));
        $task(...$args);
        return true;
    }
}
