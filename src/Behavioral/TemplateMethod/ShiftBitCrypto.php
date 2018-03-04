<?php
/**
 * ShiftBitCrypto.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Behavioral\TemplateMethod;


/**
 * Class ShiftBitCrypto
 * @package DesignPatterns\Behavioral\TemplateMethod
 */
final class ShiftBitCrypto extends CryptoBase {
    /**
     * @param string $data
     * @return string
     */
    final protected function transform(string $data): string {
        $result = '';

        for ($i = 0; $i < strlen($data); ++$i) {
            $result .= chr(ord($data[$i]) + 1);
        }

        return $result;
    }
}
