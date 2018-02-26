<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2018/2/25
 * Time: 16:01
 */
namespace DesignPatterns\Behavioral\Specification;


/**
 * Interface ItemInterface
 * @package DesignPatterns\Behavioral\Specification
 */
interface ItemInterface {
    /**
     * @return string
     */
    public function get_name(): string;
}
