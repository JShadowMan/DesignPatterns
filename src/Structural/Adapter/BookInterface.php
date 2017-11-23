<?php
/**
 * BookInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Adapter;


/**
 * Class BookInterface
 * @package DesignPatterns\Structural\Adapter
 */
interface BookInterface {
    /**
     * open book
     */
    public function open_book(): void;

    /**
     * turn page for book
     */
    public function turn_page(): void;

    /**
     * close book
     */
    public function close_book(): void;
}
