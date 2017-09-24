<?php
/**
 * Bootstrap.php
 *
 * @package   Here
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/DesignPatterns
 */
$loader = include __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('DesignPatterns\\', array('src', 'tests/'));
