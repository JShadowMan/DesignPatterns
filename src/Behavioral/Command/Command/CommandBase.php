<?php
/**
 * CommandBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Command\Command;
use DesignPatterns\Behavioral\Command\Console;


/**
 * Class CommandBase
 * @package DesignPatterns\Behavioral\Command\Command
 */
abstract class CommandBase implements CommandInterface {
    /**
     * @var Console
     */
    protected $_console;

    /**
     * CommandBase constructor.
     * @param Console $console
     * @param array ...$args
     */
    final public function __construct(Console $console, ...$args) {
        $this->_console = $console;
        $this->_init(...$args);
    }

    /**
     * @param array ...$args
     */
    abstract protected function _init(...$args): void;
}