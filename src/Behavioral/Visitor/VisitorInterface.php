<?php
/**
 * VisitorInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Visitor;


/**
 * Interface VisitorInterface
 * @package DesignPatterns\Behavioral\Visitor
 */
interface VisitorInterface {
    /**
     * @param UserObjectInterface $user
     */
    public function visit(UserObjectInterface $user): void;
}
