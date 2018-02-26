<?php
/**
 * SpecificationTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class SpecificationTest
 */
final class SpecificationTest extends PHPUnit\Framework\TestCase {
    /**
     * specification test
     */
    final public function testSpecification(): void {
        $users = array(
            array(new \DesignPatterns\Behavioral\Specification\UserObject('Jayson'), true, false),
            array(new \DesignPatterns\Behavioral\Specification\UserObject('Lisa'), false, false),
            array(new \DesignPatterns\Behavioral\Specification\UserObject('Jane'), true, true),
        );

        $start_with_j = new \DesignPatterns\Behavioral\Specification\Specification\StartWithSpecification('J');
        $end_with_e = new \DesignPatterns\Behavioral\Specification\Specification\EndWithSpecification('e');

        foreach ($users as $user) {
            list($user_object, $is_start_j, $is_end_e) = $user;

            $this->assertInstanceOf(\DesignPatterns\Behavioral\Specification\UserObject::class, $user_object);
            $this->assertEquals($is_start_j, $start_with_j->is_satisfied_by($user_object));
            $this->assertEquals($is_end_e, $end_with_e->is_satisfied_by($user_object));
        }
    }

    /**
     * and specification
     */
    final public function testAndSpecification(): void {
        $start_with_j = new \DesignPatterns\Behavioral\Specification\Specification\StartWithSpecification('J');
        $end_with_e = new \DesignPatterns\Behavioral\Specification\Specification\EndWithSpecification('e');

        $user = new \DesignPatterns\Behavioral\Specification\UserObject('Jane');
        $start_j_end_e = $start_with_j->and_specification($end_with_e);
        $this->assertTrue($start_j_end_e->is_satisfied_by($user));
    }

    /**
     * or specification
     */
    final public function testOrSpecification(): void {
        $start_with_j = new \DesignPatterns\Behavioral\Specification\Specification\StartWithSpecification('J');
        $end_with_e = new \DesignPatterns\Behavioral\Specification\Specification\EndWithSpecification('e');

        $user1 = new \DesignPatterns\Behavioral\Specification\UserObject('Jayson');
        $user2 = new \DesignPatterns\Behavioral\Specification\UserObject('Ane');
        $start_j_end_e = $start_with_j->or_specification($end_with_e);

        $this->assertTrue($start_j_end_e->is_satisfied_by($user1));
        $this->assertTrue($start_j_end_e->is_satisfied_by($user2));
    }

    /**
     * not specification
     */
    final public function testNotSpecification(): void {
        $start_with_j = new \DesignPatterns\Behavioral\Specification\Specification\StartWithSpecification('J');

        $user = new \DesignPatterns\Behavioral\Specification\UserObject('Nick');
        $not_start_j = $start_with_j->not_specification();
        $this->assertTrue($not_start_j->is_satisfied_by($user));
    }
}
