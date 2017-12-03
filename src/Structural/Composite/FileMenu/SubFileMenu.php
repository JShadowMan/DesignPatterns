<?php
/**
 * SubFileMenu.php
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
 * Class SubFileMenu
 * @package DesignPatterns\Structural\Composite\FileMenu
 */
final class SubFileMenu extends MenuItemBase {
    /**
     * @param int $indent
     * @return string
     */
    final protected function _self_render($indent = 0): string {
        return sprintf("%s%s %s\n", str_repeat('  ', $indent), 'SubMenu ...', $indent);
    }
}
