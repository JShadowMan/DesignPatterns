<?php
/**
 * EchoCommand.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Command\Command;


/**
 * Class EchoCommand
 * @package DesignPatterns\Behavioral\Command\Command
 */
final class EchoCommand extends CommandBase {
    /**
     * @var array
     */
    private $_args;

    /**
     * @param array ...$args
     */
    protected function _init(...$args): void {
        $this->_args = $args;
    }

    /**
     * @return int
     */
    public function execute(): int {
        return $this->_console->print_string(join(' ', $this->_args));
    }
}
