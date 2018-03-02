<?php
/**
 * ComparatorInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Strategy;


/**
 * Interface ComparatorInterface
 * @package DesignPatterns\Behavioral\Strategy
 */
interface ComparatorInterface {
    /**
     * @param UserObjectInterface $user1
     * @param UserObjectInterface $user2
     * @return int
     */
    public function compare(UserObjectInterface $user1, UserObjectInterface $user2): int;
}
