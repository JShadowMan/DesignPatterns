<?php
/**
 * BossVisitor.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Visitor;


/**
 * Class BossVisitor
 * @package DesignPatterns\Behavioral\Visitor
 */
final class BossVisitor implements VisitorInterface {
    /**
     * @var float
     */
    private $_total_money;

    /**
     * BossVisitor constructor.
     */
    final public function __construct() {
        $this->_total_money = 0;
    }

    /**
     * @param UserObjectInterface $user
     */
    public function visit(UserObjectInterface $user): void {
        $this->_total_money += $user->get_consume_money();
    }

    /**
     * @return float
     */
    final public function get_total_money(): float {
        return $this->_total_money;
    }
}
