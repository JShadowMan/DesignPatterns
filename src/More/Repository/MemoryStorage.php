<?php
/**
 * MemoryStorage.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\Repository;


/**
 * Class MemoryStorage
 * @package DesignPatterns\More\Repository
 */
final class MemoryStorage implements StorageInterface {
    /**
     * @var UserObject[]
     */
    private $_storage;

    /**
     * MemoryStorage constructor.
     */
    final public function __construct() {
        $this->_storage = array();
    }

    /**
     * @param string $name
     * @return UserObject|null
     */
    final public function retrieve(string $name): ?UserObject {
        return $this->_storage[$name] ?? null;
    }

    /**
     * @param UserObject $user
     */
    final public function persistent(UserObject $user): void {
        $this->_storage[$user->get_name()] = $user;
    }
}
