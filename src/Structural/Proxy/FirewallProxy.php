<?php
/**
 * FirewallProxy.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Proxy;


/**
 * Class FirewallProxy
 * @package DesignPatterns\Structural\Proxy
 */
final class FirewallProxy implements NetworkInterface {
    /**
     * @var NetworkInterface
     */
    private $_real_network;

    /**
     * FirewallProxy constructor.
     * @param NetworkInterface $real_network
     */
    final public function __construct(NetworkInterface $real_network) {
        $this->_real_network = $real_network;
    }

    /**
     * @param string $url
     * @return string
     */
    public function request(string $url): string {
        if (strpos($url, 'https') === 0) {
            return $this->_real_network->request($url);
        }
        return '500';
    }
}
