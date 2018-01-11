<?php
/**
 * FluentTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class FluentTest
 */
final class FluentTest extends PHPUnit\Framework\TestCase {
    /**
     * $fluent->...->...->...
     */
    final public function testFluentCall(): void {
        $builder = new \DesignPatterns\Structural\Fluent\SelectSqlBuilder();
        $this->assertInstanceOf(\DesignPatterns\Structural\Fluent\SelectSqlBuilder::class, $builder);

        $builder_1 = $builder->fields('*');
        $this->assertInstanceOf(\DesignPatterns\Structural\Fluent\SelectSqlBuilder::class, $builder_1);

        $builder_2 = $builder_1->from('table');
        $this->assertInstanceOf(\DesignPatterns\Structural\Fluent\SelectSqlBuilder::class, $builder_2);
    }

    /**
     * build error
     */
    final public function testErrorBuilder(): void {
        $builder = (new \DesignPatterns\Structural\Fluent\SelectSqlBuilder())->from('table');
        $this->assertEquals('', strval($builder));
    }

    /**
     * complete build select
     */
    final public function testBuilderRequest(): void {
        $builder = (new \DesignPatterns\Structural\Fluent\SelectSqlBuilder())
            ->from('users')
            ->fields('*')
            ->where('id', '1')
            ->limit(10)
            ->offset(5)
        ;
        $this->assertEquals("select * from users where id='1' limit 10 offset 5", strval($builder));
    }
}
