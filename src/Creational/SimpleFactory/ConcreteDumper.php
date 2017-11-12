<?php
/**
 * ConcreteDumper.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\SimpleFactory;
use DesignPatterns\Creational\SimpleFactory\Dumper\DumperInterface;


/**
 * Class ConcreteDumper
 * @package DesignPatterns\Creational\SimpleFactory
 */
final class ConcreteDumper {
    /**
     * @var array
     */
    private $_dumpers;

    /**
     * ConcreteDumper constructor.
     * @param array $extra_dumper
     */
    final public function __construct(array $extra_dumper = array()) {
        $this->_dumpers = array_merge(array(
            'json' => 'DesignPatterns\Creational\SimpleFactory\Dumper\JsonDumper',
            'xml' => 'DesignPatterns\Creational\SimpleFactory\Dumper\XmlDumper'
        ), $extra_dumper);
    }

    /**
     * @param string $type
     * @return DumperInterface
     * @throws \Exception
     */
    final public function create_dumper(string $type): DumperInterface {
        if (!isset($this->_dumpers[$type])) {
            throw new \Exception('cannot found dumper');
        }
        return new $this->_dumpers[$type]();
    }
}