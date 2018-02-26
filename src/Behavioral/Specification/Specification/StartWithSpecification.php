<?php
/**
 * StartWithSpecification.php
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
 * Class StartWithSpecification
 * @package DesignPatterns\Behavioral\Specification\Specification
 */
final class StartWithSpecification extends SpecificationBase {
    /**
     * @var string
     */
    private $_start_character;

    /**
     * StartWithSpecification constructor.
     * @param string $start_character
     */
    final public function __construct(string $start_character) {
        $this->_start_character = $start_character;
    }

    /**
     * @param ItemInterface $item
     * @return bool
     */
    public function is_satisfied_by(ItemInterface $item): bool {
        return $item->get_name()[0] === $this->_start_character;
    }
}
