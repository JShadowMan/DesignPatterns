<?php
/**
 * StorageInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\Repository;


/**
 * Interface StorageInterface
 * @package DesignPatterns\More\Repository
 */
interface StorageInterface {
    /**
     * @param string $name
     * @return UserObject|null
     */
    public function retrieve(string $name): ?UserObject;

    /**
     * @param UserObject $user
     */
    public function persistent(UserObject $user): void;
}
