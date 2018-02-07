<?php
/**
 * CommandInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Command\Command;


/**
 * Interface CommandInterface
 * @package DesignPatterns\Behavioral\Command\Command
 */
interface CommandInterface {
    /**
     * @return int
     */
    public function execute(): int;
}
