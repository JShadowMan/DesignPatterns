<?php
/**
 * FileMenu.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Composite\FileMenu;
use DesignPatterns\Structural\Composite\MenuItemBase;


/**
 * Class FileMenu
 * @package DesignPatterns\Structural\Composite\FileMenu
 */
final class FileMenu extends MenuItemBase {
    /**
     * @param int $indent
     * @return string
     */
    protected function _self_render($indent = 0): string {
        return sprintf("%s%s\n", str_repeat('  ', $indent), 'File');
    }
}
