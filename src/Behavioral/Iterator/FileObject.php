<?php
/**
 * FileObject.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Iterator;


/**
 * Class FileObject
 * @package DesignPatterns\Behavioral\Iterator
 */
final class FileObject {
    /**
     * @var string
     */
    private $_filename;

    /**
     * FileObject constructor.
     * @param string $filename
     */
    final public function __construct(string $filename) {
        $this->_filename = $filename;
    }

    /**
     * @return string
     */
    final public function get_filename(): string {
        return $this->_filename;
    }
}
