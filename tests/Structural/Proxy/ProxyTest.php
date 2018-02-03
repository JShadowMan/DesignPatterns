<?php
/**
 * ProxyTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


final class ProxyTest extends PHPUnit\Framework\TestCase {
    /**
     * on proxy success
     */
    final public function testProxySuccess(): void {
        $real_network = new \DesignPatterns\Structural\Proxy\RealNetwork();
        $firewall = new \DesignPatterns\Structural\Proxy\FirewallProxy($real_network);

        $security_url = 'https://is.security.com';
        $response = $firewall->request($security_url);
        $this->assertEquals(sprintf('HTTPS %s 200', $security_url), $response);
    }

    /**
     * on proxy failure
     */
    final public function testProxyFailure(): void {
        $real_network = new \DesignPatterns\Structural\Proxy\RealNetwork();
        $firewall = new \DesignPatterns\Structural\Proxy\FirewallProxy($real_network);

        $response = $firewall->request('http://no.security.com');
        $this->assertEquals('500', $response);
    }
}
