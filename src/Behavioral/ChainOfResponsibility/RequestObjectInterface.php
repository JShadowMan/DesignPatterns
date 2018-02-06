<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2018/2/6
 * Time: 21:34
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Interface RequestObjectInterface
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
interface RequestObjectInterface {
    /**
     * @return string
     */
    public function get_key(): string;

    /**
     * @param string $value
     */
    public function set_value(string $value): void;
}
