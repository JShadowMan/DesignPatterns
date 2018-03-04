<?php
/**
 * AddSaltPlainCrypto.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\TemplateMethod;


/**
 * Class AddSaltPlainCrypto
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
final class AddSaltPlainCrypto extends CryptoBase {
    /**
     * @param string $data
     * @return string
     */
    final protected function transform(string $data): string {
        return $data;
    }

    /**
     * @return string
     */
    final protected function add_salt(): string {
        return "\1\2\4";
    }
}
