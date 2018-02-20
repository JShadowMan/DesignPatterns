<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2018/2/20
 * Time: 23:56
 */
namespace DesignPatterns\Behavioral\NullObject;


/**
 * Interface LoggerInterface
 * @package DesignPatterns\Behavioral\NullObject
 */
interface LoggerInterface {
    /**
     * @param string $message
     */
    public function log(string $message): void;
}
