<?php
/**
 * BinaryOperatorSpecificationTrait.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Specification;


/**
 * Trait BinaryOperatorSpecificationTrait
 * @package DesignPatterns\Behavioral\Specification
 */
trait BinaryOperatorSpecificationTrait {
    /**
     * @var SpecificationInterface
     */
    private $_left;

    /**
     * @var SpecificationInterface
     */
    private $_right;

    /**
     * AndSpecification constructor.
     * @param SpecificationInterface $left
     * @param SpecificationInterface $right
     */
    final public function __construct(SpecificationInterface $left, SpecificationInterface $right) {
        $this->_left = $left;
        $this->_right = $right;
    }
}
