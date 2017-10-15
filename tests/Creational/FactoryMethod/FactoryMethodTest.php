<?php
/**
 * FactoryMethodTest.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */


/**
 * Class FactoryMethodTest
 */
class FactoryMethodTest extends \PHPUnit\Framework\TestCase {
    /**
     * @var array
     */
    protected $_sql_statement_types = array(
        \DesignPatterns\Creational\FactoryMethod\FactoryMethodAbstract::QUERY_SELECT,
        \DesignPatterns\Creational\FactoryMethod\FactoryMethodAbstract::QUERY_UPDATE,
        \DesignPatterns\Creational\FactoryMethod\FactoryMethodAbstract::QUERY_INSERT,
        \DesignPatterns\Creational\FactoryMethod\FactoryMethodAbstract::QUERY_DELETE
    );

    /**
     * @return array
     */
    final public function getFactories() {
        return array(
            array(new \DesignPatterns\Creational\FactoryMethod\MysqlFactory('table')),
            array(new \DesignPatterns\Creational\FactoryMethod\MongoDbFactory('table'))
        );
    }

    /**
     * test mysqlFactory
     */
    final public function testMysqlFactory() {
        $mysql = new \DesignPatterns\Creational\FactoryMethod\MysqlFactory('mysql');
        self::assertInstanceOf(\DesignPatterns\Creational\FactoryMethod\MysqlFactory::class, $mysql);
        $this->assertEquals('mysql', $mysql->get_table_name());
    }

    /**
     * test MongoDbFactory
     */
    final public function testMongoDbFactory() {
        $mongo = new \DesignPatterns\Creational\FactoryMethod\MongoDbFactory('mongo');
        self::assertInstanceOf(\DesignPatterns\Creational\FactoryMethod\MongoDbFactory::class, $mongo);
        $this->assertEquals('mongo', $mongo->get_table_name());
    }

    /**
     * @dataProvider getFactories
     * @param \DesignPatterns\Creational\FactoryMethod\FactoryMethodAbstract $factory
     */
    final public function testFactoryMethod(\DesignPatterns\Creational\FactoryMethod\FactoryMethodAbstract $factory) {
        $results = array();
        foreach ($this->_sql_statement_types as $type) {
            $results[] = $factory->query($type);
        }

        $this->assertContainsOnly(
            \DesignPatterns\Creational\FactoryMethod\QueryResult\QueryResultAbstract::class, $results);
    }
}
