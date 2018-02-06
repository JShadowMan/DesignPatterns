<?php
/**
 * RedisProvider.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Class RedisProvider
 * @package DesignPatterns\Behavioral\ChainOfResponsibility\Provider
 */
final class RedisProvider extends DataProviderBase {
    /**
     * @var array
     */
    private static $_cached_data;

    /**
     * @param string $key
     * @param string $value
     */
    public static function set_cache(string $key, string $value): void {
        self::$_cached_data[$key] = $value;
    }

    /**
     * @param RequestObjectInterface $request
     * @return bool
     */
    protected function _fetch_data(RequestObjectInterface $request): bool {
        if (isset(self::$_cached_data[$request->get_key()])) {
            $request->set_value(self::$_cached_data[$request->get_key()]);
            return true;
        }
        return false;
    }
}
