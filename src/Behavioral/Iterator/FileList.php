<?php
/**
 * FileList.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Iterator;


/**
 * Class FileList
 * @package DesignPatterns\Behavioral\Iterator
 */
final class FileList implements \Countable {
    /**
     * @var FileObject[]|array
     */
    private $_file_list;

    /**
     * FileList constructor.
     * @param array $file_list
     */
    final public function __construct(array $file_list) {
        $this->_file_list = $file_list;
    }

    /**
     * @param int $file_index
     * @return FileObject|null
     */
    final public function get_file(int $file_index): ?FileObject {
        if ($file_index < 0 || $file_index >= $this->count()) {
            return null;
        }
        return $this->_file_list[$file_index];
    }

    /**
     * @return int
     */
    final public function count(): int {
        return \count($this->_file_list);
    }
}
