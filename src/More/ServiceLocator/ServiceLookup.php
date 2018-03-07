<?php
/**
 * ServiceLookup.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\ServiceLocator;


/**
 * Class ServiceContext
 * @package DesignPatterns\More\ServiceLocator
 */
final class ServiceLookup {
    /**
     * @var array
     */
    private $_interface_service_mapping;

    /**
     * ServiceLookup constructor.
     */
    final public function __construct() {
        $this->_interface_service_mapping = array();
    }

    /**
     * @param string $interface
     * @return bool
     */
    final public function has_service(string $interface): bool {
        return isset($this->_interface_service_mapping[$interface]);
    }

    /**
     * @param string $interface
     * @return string|null
     */
    final public function get_service(string $interface): ?string {
        return $this->_interface_service_mapping[$interface] ?? null;
    }

    /**
     * @param string $interface
     * @param string $service
     */
    final public function register_service(string $interface, string $service): void {
        if (!isset($this->_interface_service_mapping[$interface])) {
            $this->_interface_service_mapping[$interface] = $service;
        }
    }
}
