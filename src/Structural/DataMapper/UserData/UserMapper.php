<?php
/**
 * UserMapper.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\DataMapper\UserData;
use DesignPatterns\Structural\DataMapper\DatabaseAdapter;
use DesignPatterns\Structural\DataMapper\Mapper;


/**
 * Class UserMapper
 * @package DesignPatterns\Structural\DataMapper\UserData
 */
final class UserMapper extends Mapper {
    /**
     * @var DatabaseAdapter
     */
    private $_adapter;

    /**
     * UserMapper constructor.
     */
    public function __construct() {
        $this->_adapter = new DatabaseAdapter();
    }

    /**
     * @param User $user
     */
    public function save(User $user): void {
        $this->_adapter->insert($user);
    }

    /**
     * @param User $user
     */
    public function update(User $user): void {
        $this->_adapter->update($user);
    }
}
