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
final class NotSpecification extends SpecificationBase {
    /**
     * @var SpecificationInterface
     */
    private $_specification;

    /**
     * NotSpecification constructor.
     * @param SpecificationInterface $spec
     */
    final public function __construct(SpecificationInterface $spec) {
        $this->_specification = $spec;
    }

    /**
     * @param ItemInterface $item
     * @return bool
     */
    final public function is_satisfied_by(ItemInterface $item): bool {
        return !$this->_specification->is_satisfied_by($item);
    }
}
