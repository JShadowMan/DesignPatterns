<?php
/**
 * UserObject.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Visitor;


/**
 * Class UserObject
 * @package DesignPatterns\Behavioral\Visitor
 */
final class UserObject implements UserObjectInterface {
    /**
     * @var float
     */
    private $_consume_money;

    /**
     * @var int
     */
    private $_in_game_time;

    /**
     * UserObject constructor.
     * @param float $money
     * @param int $time
     */
    final public function __construct(float $money, int $time) {
        $this->_consume_money = $money;
        $this->_in_game_time = $time;
    }

    /**
     * @return float
     */
    final public function get_consume_money(): float {
        return $this->_consume_money;
    }

    /**
     * @return int
     */
    final public function get_in_game_time(): int {
        return $this->_in_game_time;
    }

    /**
     * @param VisitorInterface $visitor
     */
    final public function accept(VisitorInterface $visitor) {
        $visitor->visit($this);
    }
}
