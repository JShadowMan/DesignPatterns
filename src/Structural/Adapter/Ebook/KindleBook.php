<?php
/**
 * KindleBook.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Adapter\Ebook;


/**
 * Class KindleBook
 * @package DesignPatterns\Structural\Adapter\Ebook
 */
final class KindleBook implements EBookInterface {
    /**
     * @inheritdoc
     */
    final public function power_on(): void {}

    /**
     * @inheritdoc
     */
    final public function touch_screen(): void {}

    /**
     * @inheritdoc
     */
    final public function slide_screen(): void {}

    /**
     * @inheritdoc
     */
    final public function power_off(): void {}
}
