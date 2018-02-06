<?php
/**
 * RequestObject.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Class RequestObject
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
final class RequestObject implements RequestObjectInterface {
    /**
     * @var string
     */
    private $_key;

    /**
     * @var string|null
     */
    private $_value;

    /**
     * @var DatabaseProvider|null
     */
    private $_real_provider;

    /**
     * RequestObject constructor.
     * @param string $key
     */
    final public function __construct(string $key) {
        $this->_key = $key;
    }

    /**
     * @return string
     */
    final public function get_key(): string {
        return $this->_key;
    }

    /**
     * @param string $value
     */
    final public function set_value(string $value): void {
        $this->_value = $value;
    }

    /**
     * @return null|string
     */
    final public function get_value(): ?string {
        return $this->_value;
    }

    /**
     * @param DataProviderInterface $provider
     */
    final public function set_provider_debug(DataProviderInterface $provider): void {
        $this->_real_provider = $provider;
    }

    /**
     * @return DataProviderInterface|null
     */
    final public function get_provider_debug(): ?DataProviderInterface {
        return $this->_real_provider;
    }
}
