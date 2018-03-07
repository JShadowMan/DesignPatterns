<?php
/**
 * ServiceLocatorInterface.php
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
 * Interface ServiceLocatorInterface
 * @package DesignPatterns\More\ServiceLocator
 */
interface ServiceLocatorInterface {
    /**
     * @param string $interface
     * @return ServiceInterface|null
     */
    public function get_service(string $interface): ?ServiceInterface;

    /**
     * @param string $interface
     * @param string $service
     * @param bool $share
     */
    public function register_service(string $interface, string $service, bool $share = true): void;
}
