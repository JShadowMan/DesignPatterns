<?php
/**
 * Browser.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Memento;


/**
 * Class Browser
 * @package DesignPatterns\Behavioral\Memento
 */
final class Browser {
    /**
     * @var array|Record[]
     */
    private $_records;

    /**
     * @var History
     */
    private $_history;

    /**
     * Browser constructor.
     * @param string $start_page
     */
    final public function __construct(?string $start_page = 'blank') {
        $this->_records = array();
        $this->_history = new History();

        if ($start_page) {
            $this->_records[] = $this->_history->go_and_save($start_page);
        }
    }

    /**
     * @param string $url
     */
    final public function go(string $url): void {
        $this->_records[] = $this->_history->go_and_save($url);
    }

    /**
     * @param string $url
     */
    final public function refresh(string $url): void {
        $this->_history->go($url);
    }

    /**
     * @return string
     */
    final public function back(): string {
        $record = array_pop($this->_records);

        return $this->_history->back($record);
    }
}
