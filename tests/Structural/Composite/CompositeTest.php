<?php
/**
 * CompositeTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class CompositeTest
 */
final class CompositeTest extends PHPUnit\Framework\TestCase {
    /**
     * test CompositePattern
     */
    final public function testCompositePattern(): void {
        $file_menu = new \DesignPatterns\Structural\Composite\FileMenu\FileMenu();
        $this->assertInstanceOf('\DesignPatterns\Structural\Composite\MenuItemInterface', $file_menu);

        $open_file_menu = new \DesignPatterns\Structural\Composite\FileMenu\OpenFileMenu();
        $file_menu->add_item($open_file_menu);
        $this->assertInstanceOf('\DesignPatterns\Structural\Composite\MenuItemInterface', $open_file_menu);

        $sub_1_menu = new \DesignPatterns\Structural\Composite\FileMenu\SubFileMenu();
        $file_menu->add_item($sub_1_menu);
        $this->assertInstanceOf('\DesignPatterns\Structural\Composite\MenuItemInterface', $sub_1_menu);

        $sub_2_menu = new \DesignPatterns\Structural\Composite\FileMenu\SubFileMenu();
        $sub_1_menu->add_item($sub_2_menu);
        $this->assertInstanceOf('\DesignPatterns\Structural\Composite\MenuItemInterface', $sub_2_menu);

        $menu_code = $file_menu->render();
        $this->assertInternalType('string', $menu_code);

//        echo $menu_code;
    }
}
