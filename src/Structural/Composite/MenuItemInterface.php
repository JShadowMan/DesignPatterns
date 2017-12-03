<?php
/**
 * MenuItemInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Composite;


/**
 * Interface MenuItemInterface
 * @package DesignPatterns\Structural\Composite
 */
interface MenuItemInterface {
    /**
     * @param int $indent
     * @return string
     */
    public function render(int $indent = 0): string;
}
