<?php
/**
 * JaneEyreBook.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Adapter;


/**
 * Class JaneEyreBook
 * @package DesignPatterns\Structural\Adapter
 */
class JaneEyreBook implements BookInterface {
    /**
     * @inheritdoc
     */
    final public function open_book(): void {}

    /**
     * @inheritdoc
     */
    final public function turn_page(): void {}

    /**
     * @inheritdoc
     */
    final public function close_book(): void {}
}
