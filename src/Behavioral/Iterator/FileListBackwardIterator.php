<?php
/**
 * FileListBackwardIterator.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Iterator;


/**
 * Class FileListBackwardIterator
 * @package DesignPatterns\Behavioral\Iterator
 */
final class FileListBackwardIterator extends FileListIteratorBase {
    /**
     * @return int
     */
    final protected function _direction(): int {
        return self::ITERATOR_DIRECTION_BACKWARD;
    }
}
