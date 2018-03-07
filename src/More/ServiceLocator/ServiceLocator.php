<?php
/**
 * ServiceLocator.php
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
 * Class ServiceLocator
 * @package DesignPatterns\More\ServiceLocator
 */
final class ServiceLocator implements ServiceLocatorInterface {
    /**
     * @var ServiceLookup
     */
    private $_lookup;

    /**
     * @var ServiceStorage
     */
    private $_storage;

    /**
     * ServiceLocator constructor.
     */
    final public function __construct() {
        $this->_lookup = new ServiceLookup();
        $this->_storage = new ServiceStorage();
    }

    /**
     * @param string $interface
     * @param string $service
     * @param bool $share
     */
    final public function register_service(string $interface, string $service, bool $share = true): void {
        $this->_lookup->register_service($interface, $service);
        if ($share) {
            $this->_storage->add_cache($interface, new $service());
        }
    }

    /**
     * @param string $interface
     * @return ServiceInterface|null
     */
    final public function get_service(string $interface): ?ServiceInterface {
        $object = $this->_storage->get_cache($interface);
        if ($object !== null) {
            return $object;
        }

        if ($this->_lookup->has_service($interface)) {
            $service = $this->_lookup->get_service($interface);
            return new $service();
        }
    }
}
