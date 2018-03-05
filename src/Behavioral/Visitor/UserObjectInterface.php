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
namespace DesignPatterns\Behavioral\Visitor;


/**
 * Interface UserObjectInterface
 * @package DesignPatterns\Behavioral\Visitor
 */
interface UserObjectInterface {
    /**
     * @return float
     */
    public function get_consume_money(): float;

    /**
     * @return int
     */
    public function get_in_game_time(): int;

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor);
}
