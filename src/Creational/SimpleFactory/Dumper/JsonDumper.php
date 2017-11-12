<?php
/**
 * JsonDumper.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\SimpleFactory\Dumper;


/**
 * Class JsonDumper
 * @package DesignPatterns\Creational\SimpleFactory\Dumper
 */
final class JsonDumper implements DumperInterface {
    /**
     * @param array $list
     * @return string
     */
    final public function dump(array $list): string {
        return json_encode($list);
    }
}
