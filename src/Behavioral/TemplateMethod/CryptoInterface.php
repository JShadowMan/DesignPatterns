<?php
/**
 * CryptoInterface.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\TemplateMethod;


/**
 * Interface CryyptoInterface
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
interface CryptoInterface {
    /**
     * @param string $data
     * @return string
     */
    public function encrypt(string $data): string;
}
