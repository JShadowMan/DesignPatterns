<?php
/**
 * JwtWidget.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\StaticFactory\Widget;


/**
 * Class JwtWidget
 * @package DesignPatterns\Creational\StaticFactory\Widget
 */
final class JwtWidget implements WidgetInterface {
    /**
     * @param array $options
     * @return array
     */
    final public function run(array $options): array {
        /* process jwt token */
        $options = json_encode($options);

        return array(
            'header' => array(
                'alg' => 'HS256'
            ),
            'body' => $options,
            'signature' => md5($options)
        );
    }
}
