<?php
/**
 * UserRepository.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\Repository;


/**
 * Class UserRepository
 * @package DesignPatterns\More\Repository
 */
final class UserRepository {
    /**
     * @var StorageInterface
     */
    private $_storage;

    /**
     * UserRepository constructor.
     */
    final public function __construct(StorageInterface $storage) {
        $this->_storage = $storage;
    }

    /**
     * @param string $name
     * @return UserObject|null
     */
    final public function get_user_by_name(string $name): ?UserObject {
        return $this->_storage->retrieve($name);
    }

    /**
     * @param UserObject $user
     */
    final public function save_user(UserObject $user): void {
        $this->_storage->persistent($user);
    }
}
