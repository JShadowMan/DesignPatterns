<?php
/**
 * UserCollection.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Strategy;


/**
 * Class UserCollection
 * @package DesignPatterns\Behavioral\Strategy
 */
final class UserCollection {
    /**
     * @var UserObject[]
     */
    private $_users;

    /**
     * UserCollection constructor.
     * @param array $users
     */
    final public function __construct(array $users) {
        $this->_users = array_filter($users, function($object) {
            return $object instanceof UserObject;
        });
    }

    /**
     * @param ComparatorInterface $comparator
     */
    final public function sort(ComparatorInterface $comparator) {
        usort($this->_users, array($comparator, 'compare'));
    }

    /**
     * @return array
     */
    final public function get_user_ids(): array {
        return array_map(function(UserObject $user) {
            return $user->get_id();
        }, $this->_users);
    }

    /**
     * @return array
     */
    final public function get_user_names(): array {
        return array_map(function(UserObject $user) {
            return $user->get_name();
        }, $this->_users);
    }
}
