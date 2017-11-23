<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2017/11/23
 * Time: 22:26
 */
namespace DesignPatterns\Structural\Adapter\Ebook;


/**
 * Interface EBookInterface
 * @package DesignPatterns\Structural\Adapter\Ebook
 */
interface EBookInterface {
    /**
     * power on EBook
     */
    public function power_on(): void;

    /**
     * touch screen
     */
    public function touch_screen(): void;

    /**
     * slide screen
     */
    public function slide_screen(): void;

    /**
     * power off
     */
    public function power_off(): void;
}
