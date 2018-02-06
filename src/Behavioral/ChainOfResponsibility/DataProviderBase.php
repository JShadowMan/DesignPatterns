<?php
/**
 * DataProviderBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Class DataProviderBase
 * @package DesignPatterns\Behavioral\ChainOfResponsibility\Provider
 */
abstract class DataProviderBase implements DataProviderInterface {
    /**
     * @var DataProviderInterface|null
     */
    private $_successor;

    /**
     * @param DataProviderInterface $provider
     */
    final public function add_provider(DataProviderInterface $provider): void {
        if ($this->_successor === null) {
            $this->_successor = $provider;
        } else {
            $this->_successor->add_provider($provider);
        }
    }

    /**
     * @param RequestObjectInterface $request
     * @return bool
     */
    final public function fetch(RequestObjectInterface $request): bool {
        if ($this->_fetch_data($request)) {
            /* @var $request RequestObject */
            $request->set_provider_debug($this);  // DEBUG ONLY
            return true;
        } else {
            if ($this->_successor) {
                return $this->_successor->fetch($request);
            }
        }
        return false;
    }

    /**
     * @param RequestObjectInterface $request
     * @return bool
     */
    abstract protected function _fetch_data(RequestObjectInterface $request): bool;
}
