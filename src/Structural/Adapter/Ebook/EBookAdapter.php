<?php
/**
 * EBookAdapter.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Adapter\Ebook;
use DesignPatterns\Structural\Adapter\BookInterface;


/**
 * Class EBookAdapter
 * @package DesignPatterns\Structural\Adapter\Ebook
 */
final class EBookAdapter implements BookInterface {
    /**
     * @var EBookInterface
     */
    private $_ebook;

    /**
     * EBookAdapter constructor.
     * @param EBookInterface $ebook
     */
    public function __construct(EBookInterface $ebook) {
        $this->_ebook = $ebook;
    }

    /**
     * @inheritdoc
     */
    public function open_book(): void {
        $this->_ebook->power_on();
    }

    /**
     * @inheritdoc
     */
    public function turn_page(): void {
        $this->_ebook->touch_screen();
        $this->_ebook->slide_screen();
    }

    /**
     * @inheritdoc
     */
    public function close_book(): void {
        $this->_ebook->power_off();
    }
}
