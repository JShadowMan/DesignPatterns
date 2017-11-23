<?php
/**
 * AdapterTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class AdapterTest
 */
final class AdapterTest extends \PHPUnit\Framework\TestCase {
    /**
     * @return array
     */
    final public function book_provider(): array {
        return array(
            array(
                new \DesignPatterns\Structural\Adapter\JaneEyreBook()
            ),
            array(
                new \DesignPatterns\Structural\Adapter\Ebook\EBookAdapter(
                    new \DesignPatterns\Structural\Adapter\Ebook\KindleBook()
                )
            )
        );
    }

    /**
     * @param \DesignPatterns\Structural\Adapter\BookInterface $book
     * @dataProvider book_provider
     */
    final public function testAdapter(\DesignPatterns\Structural\Adapter\BookInterface $book): void {
        $this->assertTrue(method_exists($book, 'open_book'));
        $book->open_book();

        $this->assertTrue(method_exists($book, 'turn_page'));
        $book->turn_page();

        $this->assertTrue(method_exists($book, 'close_book'));
        $book->close_book();
    }
}
