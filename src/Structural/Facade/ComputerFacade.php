<?php
/**
 * ComputerFacade.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Facade;
use DesignPatterns\Structural\Facade\Component\ComputerComponentInterface;
use DesignPatterns\Structural\Facade\Component\CpuComponent;
use DesignPatterns\Structural\Facade\Component\GraphicsComponent;
use DesignPatterns\Structural\Facade\Component\MemoryComponent;


/**
 * Class ComputerFacade
 * @package DesignPatterns\Structural\Facade
 */
final class ComputerFacade implements ComputerFacadeInterface {
    /**
     * @var ComputerComponentInterface[]
     */
    private $_components;

    /**
     * ComputerFacade constructor.
     */
    final public function __construct() {
        $this->_components = array();

        $this->_components[] = new CpuComponent();
        $this->_components[] = new MemoryComponent();
        $this->_components[] = new GraphicsComponent();
    }

    /**
     * @return string
     */
    final public function start_computer(): string {
        $log = '';
        foreach ($this->_components as $component) {
            $log .= $component->power_on();
        }
        return "<computer_up>{$log}</computer_up>";
    }

    /**
     * @return string
     */
    final public function shutdown_computer(): string {
        $log = '';
        foreach ($this->_components as $component) {
            $log .= $component->power_off();
        }
        return "<computer_down>{$log}</computer_down>";
    }
}
