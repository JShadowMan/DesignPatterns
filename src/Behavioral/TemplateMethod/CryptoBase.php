<?php
/**
 * CryptoBase.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\TemplateMethod;


/**
 * Class CryptoBase
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
abstract class CryptoBase implements CryptoInterface {
    /**
     * @param string $data
     * @return string
     */
    final public function encrypt(string $data): string {
        return $this->transform($data . $this->add_salt());
    }

    /**
     * @return string
     */
    protected function add_salt(): string {
        return '';
    }

    /**
     * @param string $data
     * @return string
     */
    abstract protected function transform(string $data): string;
}
