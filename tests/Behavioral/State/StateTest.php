<?php
/**
 * StateTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class StateTest
 */
final class StateTest extends PHPUnit\Framework\TestCase {
    /**
     * test state pattern
     */
    final public function testStatePattern(): void {
        $output = '';
        $context = new \DesignPatterns\Behavioral\State\StateContext();

        $context->start_engine();
        $this->expectOutputString($output);

        $context->neutral();
        $output .= 'neutral';
        $this->expectOutputString($output);

        $context->drive();
        $output .= 'drive';
        $this->expectOutputString($output);

        $context->neutral();
        $output .= 'neutral';
        $this->expectOutputString($output);

        $context->stop_engine();
        $output .= 'stop engine';
        $this->expectOutputString($output);

        $context->stop_engine();
        $this->expectOutputString($output);

        $context->start_engine();
        $output .= 'start engine';
        $this->expectOutputString($output);

        $context->drive();
        $output .= 'drive';
        $this->expectOutputString($output);
    }
}