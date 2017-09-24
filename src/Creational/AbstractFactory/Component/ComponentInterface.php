<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2017/9/24
 * Time: 15:48
 */
namespace DesignPatterns\Creational\AbstractFactory\Component;


/**
 * Interface ComponentInterface
 * @package DesignPatterns\Creational\AbstractFactory\Component
 */
interface ComponentInterface {
    /**
     * @return string
     */
    public function render();
}
