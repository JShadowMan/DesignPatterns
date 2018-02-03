<?php
/**
 * NetworkInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Proxy;


/**
 * Interface NetworkInterface
 * @package DesignPatterns\Structural\Proxy
 */
interface NetworkInterface {
    /**
     * @param string $url
     * @return string
     */
    public function request(string $url): string;
}
