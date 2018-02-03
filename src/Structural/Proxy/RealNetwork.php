<?php
/**
 * RealNetwork.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Proxy;


/**
 * Class RealNetwork
 * @package DesignPatterns\Structural\Proxy
 */
final class RealNetwork implements NetworkInterface {
    /**
     * @param string $url
     * @return string
     */
    final public function request(string $url): string {
        return sprintf('HTTPS %s 200', $url);
    }
}
