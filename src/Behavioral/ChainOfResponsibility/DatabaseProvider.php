<?php
/**
 * DatabaseProvider.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Class DatabaseProvider
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
final class DatabaseProvider extends DataProviderBase {
    /**
     * @param RequestObjectInterface $request
     * @return bool
     * @throws \Exception
     */
    protected function _fetch_data(RequestObjectInterface $request): bool {
        $value = bin2hex(random_bytes(4));
        $request->set_value($value);

        // Illegal operator?
        RedisProvider::set_cache($request->get_key(), $value);

        return true;
    }
}
