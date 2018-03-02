<?php
/**
 * UserObjectInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Strategy;


/**
 * Interface UserObjectInterface
 * @package DesignPatterns\Behavioral\Strategy
 */
interface UserObjectInterface {
    /**
     * @return int
     */
    public function get_id(): int;

    /**
     * @return string
     */
    public function get_name(): string;
}
