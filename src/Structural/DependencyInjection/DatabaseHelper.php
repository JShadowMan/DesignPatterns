<?php
/**
 * DatabaseHelper.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\DependencyInjection;


/**
 * Class DatabaseHelper
 * @package DesignPatterns\Structural\DependencyInjection
 */
final class DatabaseHelper {
    /**
     * @var ConfigInterface
     */
    private $_config;

    /**
     * DatabaseHelper constructor.
     * @param ConfigInterface $config
     */
    final public function __construct(ConfigInterface $config) {
        $this->_config = $config;
    }

    /**
     * @return null|string
     */
    final public function get_server_host(): ?string {
        return $this->_config->get('host');
    }

    /**
     * @return int|null
     */
    final public function get_server_port(): ?int {
        return $this->_config->get('port');
    }
}