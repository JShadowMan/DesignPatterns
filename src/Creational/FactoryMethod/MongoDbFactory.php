<?php
/**
 * MongoDbFactory.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\QueryResult\MongoDb\MongoDbQueryResult;
use DesignPatterns\Creational\FactoryMethod\QueryResult\QueryResultAbstract;
use DesignPatterns\Creational\FactoryMethod\QueryStatement\MongoDb\MongoDbQueryStatement;
use DesignPatterns\Creational\FactoryMethod\QueryStatement\QueryStatementAbstract;


/**
 * Class MongoDbFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
final class MongoDbFactory extends FactoryMethodAbstract {
    /**
     * @param int $type
     * @return QueryStatementAbstract
     */
    final protected function _create_sql($type) {
        return new MongoDbQueryStatement($type, $this->get_table_name());
    }

    /**
     * @param QueryStatementAbstract $sql
     * @return QueryResultAbstract
     */
    final protected function _query_sql($sql) {
        return new MongoDbQueryResult($sql);
    }
}
