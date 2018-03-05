<?php
/**
 * ProducerVisitor.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Visitor;


/**
 * Class ProducerVisitor
 * @package DesignPatterns\Behavioral\Visitor
 */
final class ProducerVisitor implements VisitorInterface {
    /**
     * @var int
     */
    private $_kpi_count;

    /**
     * @var int
     */
    private $_player_count;

    /**
     * ProducerVisitor constructor.
     */
    final public function __construct() {
        $this->_kpi_count = 0;
        $this->_player_count = 0;
    }

    /**
     * @param UserObjectInterface $user
     */
    final public function visit(UserObjectInterface $user): void {
        $this->_player_count += 1;
        if ($user->get_in_game_time() > 3600) {
            $this->_kpi_count += 1;
        }
    }

    /**
     * @param float $min_kpi
     * @return bool
     */
    final public function game_success(float $min_kpi = .5): bool {
        return $this->_kpi_count / $this->_player_count > $min_kpi;
    }
}
