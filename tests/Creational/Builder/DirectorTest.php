<?php
/**
 * DirectorTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatternsTest\Creational\Builder;
use DesignPatterns\Creational\Builder\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\Builder\BuilderInterface;
use DesignPatterns\Creational\Builder\Builder\V12TruckBuilder;
use DesignPatterns\Creational\Builder\Builder\V8TruckBuilder;
use DesignPatterns\Creational\Builder\Component\ComponentAbstract;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Product\VehicleProductAbstract;


/**
 * Class DirectorTest
 */
class DirectorTest extends \PHPUnit_Framework_TestCase {
    /**
     * @return array
     */
    final public function getBuilders() {
        return array(
            array(new BikeBuilder()),
            array(new V8TruckBuilder()),
            array(new V12TruckBuilder())
        );
    }

    /**
     * @param BuilderInterface $builder
     * @dataProvider getBuilders
     */
    final public function testFactoryCreational(BuilderInterface $builder) {
        $director = new Director();
        $this->assertInstanceOf(VehicleProductAbstract::class, $director->build($builder));
        $this->assertContainsOnly(ComponentAbstract::class, $director->build($builder)->get_components());
    }
}
