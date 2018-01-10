<?php
/**
 * FacadeTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


final class FacadeTest extends PHPUnit\Framework\TestCase {
    /**
     * @return array
     */
    final public function computer_provider(): array {
        return array(
            array(new \DesignPatterns\Structural\Facade\ComputerFacade()),
            array(new \DesignPatterns\Structural\Facade\HighPerformanceComponentFacade())
        );
    }

    /**
     * @dataProvider computer_provider
     * @param \DesignPatterns\Structural\Facade\ComputerFacadeInterface $computer
     */
    final public function testGenericComputer(\DesignPatterns\Structural\Facade\ComputerFacadeInterface $computer): void {
        $log = $computer->start_computer();
        $this->assertInternalType('string', $log);

        $xml = simplexml_load_string($log);
        $cpu = $xml->xpath('/computer_up/cpu');
        $this->assertCount(1, $cpu);
        $this->assertEquals($cpu[0], 'UP');

        if ($computer instanceof \DesignPatterns\Structural\Facade\HighPerformanceComponentFacade) {
            $memory = $xml->xpath('/computer_up/memory');
            $this->assertCount(2, $memory);
            $this->assertEquals($memory[0], 'UP');
            $this->assertEquals($memory[1], 'UP');
        }

        $log = $computer->shutdown_computer();
        $xml = simplexml_load_string($log);
        $this->assertInternalType('string', $log);

        if ($computer instanceof \DesignPatterns\Structural\Facade\HighPerformanceComponentFacade) {
            $graphics = $xml->xpath('/computer_down/graphics');
            $this->assertCount(2, $graphics);
            $this->assertEquals($graphics[0], 'DOWN');
            $this->assertEquals($graphics[1], 'DOWN');
        }
    }
}
