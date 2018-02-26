<?php
/**
 * SpecificationBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Specification;


/**
 * Class SpecificationBase
 * @package DesignPatterns\Behavioral\Specification
 */
abstract class SpecificationBase implements SpecificationInterface {
    /**
     * @param SpecificationInterface $spec
     * @return SpecificationInterface
     */
    final public function and_specification(SpecificationInterface $spec): SpecificationInterface {
        return new AndSpecification($this, $spec);
    }

    /**
     * @param SpecificationInterface $spec
     * @return SpecificationInterface
     */
    final public function or_specification(SpecificationInterface $spec): SpecificationInterface {
        return new OrSpecification($this, $spec);
    }

    /**
     * @return SpecificationInterface
     */
    final public function not_specification(): SpecificationInterface {
        return new NotSpecification($this);
    }
}
