<?php
/**
 * ServiceStorage.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\More\ServiceLocator;
use DesignPatterns\More\ServiceLocator\Service\ServiceInterface;


/**
 * Class ServiceStorage
 * @package DesignPatterns\More\ServiceLocator
 */
final class ServiceStorage {
    /**
     * @var ServiceInterface[]
     */
    private $_cache_instances;

    /**
     * ServiceStorage constructor.
     */
    final public function __construct() {
        $this->_cache_instances = array();
    }

    /**
     * @param string $interface
     * @param ServiceInterface $service
     */
    final public function add_cache(string $interface, ServiceInterface $service): void {
        if (!isset($this->_cache_instances[$interface])) {
            $this->_cache_instances[$interface] = $service;
        }
    }

    /**
     * @param string $interface
     * @return ServiceInterface|null
     */
    final public function get_cache(string $interface): ?ServiceInterface {
        return $this->_cache_instances[$interface] ?? null;
    }
}
