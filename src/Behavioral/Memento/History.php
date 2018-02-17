<?php
/**
 * History.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\Memento;


/**
 * Class History
 * @package DesignPatterns\Behavioral\Memento
 */
final class History {
    /**
     * @var string
     */
    private $_url;

    /**
     * @param string $url
     */
    final public function go(string $url): void {
        $this->_url = $url;
    }

    /**
     * @param string $url
     * @return Record
     */
    final public function go_and_save(string $url): Record {
        $this->_url = $url;
        return new Record($url);
    }

    /**
     * @param Record $record
     * @return string
     */
    final public function back(Record $record): string {
        $this->_url = $record->get_state();
        return $this->_url;
    }
}
