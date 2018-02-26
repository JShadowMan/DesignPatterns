<?php
/**
 * EndWithSpecification.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Specification\Specification;
use DesignPatterns\Behavioral\Specification\ItemInterface;
use DesignPatterns\Behavioral\Specification\SpecificationBase;


/**
 * Class EndWithSpecification
 * @package DesignPatterns\Behavioral\Specification\Specification
 */
final class EndWithSpecification extends SpecificationBase {
    /**
     * @var string
     */
    private $_end_character;

    /**
     * StartWithSpecification constructor.
     * @param string $end_character
     */
    final public function __construct(string $end_character) {
        $this->_end_character = $end_character;
    }

    /**
     * @param ItemInterface $item
     * @return bool
     */
    public function is_satisfied_by(ItemInterface $item): bool {
        $name = $item->get_name();
        return $name[strlen($name) - 1] === $this->_end_character;
    }
}
