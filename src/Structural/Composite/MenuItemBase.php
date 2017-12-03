<?php
/**
 * MenuItemBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Composite;



/**
 * Class MenuItemBase
 * @package DesignPatterns\Structural\Composite
 */
abstract class MenuItemBase implements MenuItemInterface {
    /**
     * @var array|MenuItemInterface[]
     */
    private $_items;

    /**
     * MenuItemBase constructor.
     */
    final public function __construct() {
        $this->_items = array();
    }

    /**
     * @param MenuItemInterface $item
     */
    final public function add_item(MenuItemInterface $item): void {
        $this->_items[] = $item;
    }

    /**
     * @param int $indent
     * @return string
     */
    final public function render(int $indent = 0): string {
        $stringify_menu = '';

        $stringify_menu .= $this->_self_render($indent);
        if (!empty($this->_items)) {
            foreach ($this->_items as $item) {
                $stringify_menu .= $item->render($indent + 1);
            }
        }

        return $stringify_menu;
    }

    /**
     * @param int $indent
     * @return string
     */
    abstract protected function _self_render($indent = 0): string;
}
