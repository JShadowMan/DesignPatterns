<?php
/**
 * UserObject.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Specification;


/**
 * Class UserObject
 * @package DesignPatterns\Behavioral\Specification
 */
final class UserObject implements ItemInterface {

    /**
     * @var string
     */
    private $_name;

    /**
     * UserObject constructor.
     * @param string $user_name
     */
    final public function __construct(string $user_name) {
        $this->_name = $user_name;
    }

    /**
     * @return string
     */
    final public function get_name(): string {
        return $this->_name;
    }
}