<?php
/**
 * DumperInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\SimpleFactory\Dumper;


/**
 * Interface DumperInterface
 * @package DesignPatterns\Creational\SimpleFactory\Dumper
 */
interface DumperInterface {
    /**
     * @param array $list
     * @return string
     */
    public function dump(array $list): string;
}
