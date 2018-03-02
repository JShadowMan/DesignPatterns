<?php
/**
 * UserNameComparator.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Strategy;


/**
 * Class UserNameComparator
 * @package DesignPatterns\Behavioral\Strategy
 */
final class UserNameComparator implements ComparatorInterface {
    /**
     * @param UserObjectInterface $user1
     * @param UserObjectInterface $user2
     * @return int
     */
    final public function compare(UserObjectInterface $user1, UserObjectInterface $user2): int {
        return strcmp($user1->get_name(), $user2->get_name());
    }
}
