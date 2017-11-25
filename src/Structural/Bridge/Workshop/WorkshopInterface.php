<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2017/11/26
 * Time: 16:06
 */
namespace DesignPatterns\Structural\Bridge\Workshop;


/**
 * Interface WorkshopInterface
 * @package DesignPatterns\Structural\Bridge\Workshop
 */
interface WorkshopInterface {
    /**
     * make a component
     */
    public function work(): void;
}
