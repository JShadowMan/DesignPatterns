<?php
/**
 * HumanPrototypeTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\Prototype;


/**
 * Class HumanPrototypeTest
 * @package DesignPatterns\Creational\Prototype
 */
class HumanPrototypeTest extends \PHPUnit\Framework\TestCase {
    /**
     * @return array
     */
    final public function generateHuman(): array {
        return array(
            array( new MalePrototype('jack', 18) ),
            array( new FemalePrototype('lucy', 18) ),
        );
    }

    /**
     * @param HumanPrototype $human
     * @dataProvider generateHuman
     */
    final public function testHumanClone(HumanPrototype $human) {
        $this->assertInstanceOf('DesignPatterns\Creational\Prototype\HumanPrototype', $human);

        $clone_human = clone $human;
        $this->assertEquals($human->get_name(), $clone_human->get_name());
        $this->assertEquals($human->get_gender(), $clone_human->get_gender());
        $this->assertEquals(18, $human->get_age());
        $this->assertEquals(0, $clone_human->get_age());

        $clone_human->set_name('clone human');
        $clone_human->set_age(12);

        $this->assertTrue($human->get_name() !== $clone_human->get_name());
        $this->assertTrue($human->get_age() !== $clone_human->get_age());
    }
}
