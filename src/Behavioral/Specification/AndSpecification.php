<?php
/**
 * AndSpecification.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Specification;


/**
 * Class AndSpecification
 * @package DesignPatterns\Behavioral\Specification
 */
final class AndSpecification extends SpecificationBase {
    /**
     * constructor of left and right
     */
    use BinaryOperatorSpecificationTrait;

    /**
     * @param ItemInterface $item
     * @return bool
     */
    final public function is_satisfied_by(ItemInterface $item): bool {
        return $this->_left->is_satisfied_by($item) && $this->_right->is_satisfied_by($item);
    }
}
