<?php
/**
 * Created by PhpStorm.
 * User: ShadowMan
 * Date: 2018/2/25
 * Time: 15:47
 */
namespace DesignPatterns\Behavioral\Specification;


/**
 * Interface SpecificationInterface
 * @package DesignPatterns\Behavioral\Specification
 */
interface SpecificationInterface {
    /**
     * @param ItemInterface $item
     * @return bool
     */
    public function is_satisfied_by(ItemInterface $item): bool;

    /**
     * @param SpecificationInterface $spec
     * @return SpecificationInterface
     */
    public function and_specification(SpecificationInterface $spec): SpecificationInterface;

    /**
     * @param SpecificationInterface $spec
     * @return SpecificationInterface
     */
    public function or_specification(SpecificationInterface $spec): SpecificationInterface;

    /**
     * @return SpecificationInterface
     */
    public function not_specification(): SpecificationInterface;
}
