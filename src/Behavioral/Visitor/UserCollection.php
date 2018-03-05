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
namespace DesignPatterns\Behavioral\Visitor;


/**
 * Class UserCollection
 * @package DesignPatterns\Behavioral\Visitor
 */
final class UserCollection {
    /**
     * @var UserObjectInterface[]
     */
    private $_users;

    /**
     * UserCollection constructor.
     */
    final public function __construct() {
        $this->_users = array();
    }

    /**
     * @param UserObjectInterface $user
     */
    final public function add_user(UserObjectInterface $user): void {
        $this->_users[] = $user;
    }

    /**
     * @param VisitorInterface $visitor
     */
    final public function accept_visitor(VisitorInterface $visitor): void {
        foreach ($this->_users as $user) {
            $user->accept($visitor);
        }
    }
}
