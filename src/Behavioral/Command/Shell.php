<?php
/**
 * Shell.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Command;
use DesignPatterns\Behavioral\Command\Command\CommandInterface;


/**
 * Class Shell
 * @package DesignPatterns\Behavioral\Command
 */
final class Shell {
    /**
     * @var CommandInterface[]
     */
    private $_commands = array();

    /**
     * @param CommandInterface $command
     */
    final public function input(CommandInterface $command): void {
        $this->_commands[] = $command;
    }

    /**
     * @return int
     */
    final public function run(): int {
        $result = 0;
        foreach ($this->_commands as $command) {
            if ($command->execute() !== 0) {
                $result = 0xff;
                break;
            }
        }

        $this->_commands = [];  // empty commands
        return $result;
    }
}
