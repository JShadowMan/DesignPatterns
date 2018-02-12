<?php
/**
 * IteratorTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class IteratorTest
 */
final class IteratorTest extends PHPUnit\Framework\TestCase {
    /**
     * empty fileList
     */
    final public function testEmptyFileListIterator(): void {
        $file_list = new \DesignPatterns\Behavioral\Iterator\FileList(array());
        $forward_iterator = new \DesignPatterns\Behavioral\Iterator\FileListForwardIterator($file_list);
        $backward_iterator = new \DesignPatterns\Behavioral\Iterator\FileListBackwardIterator($file_list);

        $this->assertEquals(null, $forward_iterator->current());
        $this->assertEquals(null, $backward_iterator->current());
    }

    /**
     * forward iterator
     */
    final public function testForwardListIterator(): void {
        $files = array();
        for ($i = 0; $i < 10; ++$i) {
            $files[] = new \DesignPatterns\Behavioral\Iterator\FileObject(strval($i));
        }

        $file_list = new \DesignPatterns\Behavioral\Iterator\FileList($files);
        $forward_iterator = new \DesignPatterns\Behavioral\Iterator\FileListForwardIterator($file_list);

        $correct_index = 0;
        while ($forward_iterator->valid()) {
            $file_object = $forward_iterator->current();

            $this->assertInstanceOf(\DesignPatterns\Behavioral\Iterator\FileObject::class, $file_object);
            $this->assertEquals(strval($correct_index), $file_object->get_filename());

            $forward_iterator->next();
            $correct_index += 1;
        }
    }

    /**
     * backward iterator
     */
    final public function testBackwardIterator(): void {
        $files = array();
        for ($i = 0; $i < 10; ++$i) {
            $files[] = new \DesignPatterns\Behavioral\Iterator\FileObject(strval($i));
        }

        $file_list = new \DesignPatterns\Behavioral\Iterator\FileList($files);
        $backward_iterator = new \DesignPatterns\Behavioral\Iterator\FileListBackwardIterator($file_list);

        $correct_index = count($files) - 1;
        while ($backward_iterator->valid()) {
            $file_object = $backward_iterator->current();

            $this->assertInstanceOf(\DesignPatterns\Behavioral\Iterator\FileObject::class, $file_object);
            $this->assertEquals(strval($correct_index), $file_object->get_filename());

            $backward_iterator->next();
            $correct_index -= 1;
        }
    }
}
