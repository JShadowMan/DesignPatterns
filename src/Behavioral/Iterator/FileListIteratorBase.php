<?php
/**
 * FileListIterator.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Iterator;


/**
 * Class FileListIterator
 * @package DesignPatterns\Behavioral\Iterator
 */
abstract class FileListIteratorBase implements \Iterator {
    /**
     * @var int
     */
    private $_current_index;

    /**
     * @var FileList
     */
    private $_file_list;

    /**
     * FileListIterator constructor.
     * @param FileList $file_list
     */
    final public function __construct(FileList $file_list) {
        $this->_file_list = $file_list;
        $this->rewind();
    }

    /**
     * @return int
     */
    abstract protected function _direction(): int;

    /**
     * @return FileObject|null
     */
    public function current(): ?FileObject {
        return $this->_file_list->get_file($this->_current_index);
    }

    /**
     * @return int
     */
    public function key(): int {
        return $this->_current_index;
    }

    /**
     * move forward to next element
     */
    public function next(): void {
        $this->_current_index += 1;
    }

    /**
     * rewind the Iterator to the first element
     */
    public function rewind(): void {
        if ($this->_direction() === self::ITERATOR_DIRECTION_FORWARD) {
            $this->_current_index = 0;
        } else {
            $this->_current_index = count($this->_file_list) - 1;
            if ($this->_current_index === -1) {
                $this->_current_index = 0;
            }
        }
    }

    /**
     * @return bool
     */
    public function valid(): bool {
        return $this->current() !== null;
    }

    /**
     * forward
     */
    protected const ITERATOR_DIRECTION_FORWARD = 0;

    /**
     * backward
     */
    protected const ITERATOR_DIRECTION_BACKWARD = 1;
}