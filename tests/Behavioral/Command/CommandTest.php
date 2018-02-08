<?php
/**
 * CommandTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class CommandTest
 */
final class CommandTest extends PHPUnit\Framework\TestCase {
    /**
     * test command pattern
     */
    final public function testEchoCommand(): void {
        $shell = new \DesignPatterns\Behavioral\Command\Shell();
        $console = new \DesignPatterns\Behavioral\Command\Console();
        $echo_command = new \DesignPatterns\Behavioral\Command\Command\EchoCommand($console, 'hello', 'jayson');

        $shell->input($echo_command);
        $shell->run();

        $this->expectOutputString('hello jayson');
    }
}
