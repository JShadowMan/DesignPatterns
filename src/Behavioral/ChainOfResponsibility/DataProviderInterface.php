<?php
/**
 * DataProviderInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Interface DataProviderInterface
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
interface DataProviderInterface {
    /**
     * @param DataProviderInterface $provider
     */
    public function add_provider(DataProviderInterface $provider): void;

    /**
     * @param RequestObjectInterface $request
     * @return bool
     */
    public function fetch(RequestObjectInterface $request): bool;
}
