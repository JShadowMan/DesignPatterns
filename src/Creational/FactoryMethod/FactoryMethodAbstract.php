<?php
/**
 * FactoryMethodAbstract.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\QueryResult\QueryResultAbstract;
use DesignPatterns\Creational\FactoryMethod\QueryStatement\QueryStatementAbstract;


/**
 * Class FactoryMethodAbstract
 * @package DesignPatterns\Creational\FactoryMethod
 */
abstract class FactoryMethodAbstract {
    /**
     * @var string
     */
    private $_table_name;

    /**
     * FactoryMethodAbstract constructor.
     * @param string $table
     */
    final public function __construct($table) {
        $this->_table_name = $table;
    }

    /**
     * @param int $type
     * @return QueryResultAbstract
     */
    final public function query($type) {
        $sql_stmt = $this->_create_sql($type);
        return $this->_query_sql($sql_stmt);
    }

    /**
     * @return string
     */
    final public function get_table_name() {
        return $this->_table_name;
    }

    /**
     * @param int $type
     * @return QueryStatementAbstract
     */
    abstract protected function _create_sql($type);

    /**
     * @param QueryStatementAbstract $sql
     * @return QueryResultAbstract
     */
    abstract protected function _query_sql($sql);

    /**
     * query type: select
     */
    const QUERY_SELECT = 0x0001;

    /**
     * query type: update
     */
    const QUERY_UPDATE = 0x0002;

    /**
     * query type: insert
     */
    const QUERY_INSERT = 0x0004;

    /**
     * query type: delete
     */
    const QUERY_DELETE = 0x0008;
}
