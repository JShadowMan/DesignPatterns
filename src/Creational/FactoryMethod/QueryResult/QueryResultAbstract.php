<?php
/**
 * QueryResultAbstract.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\FactoryMethod\QueryResult;
use DesignPatterns\Creational\FactoryMethod\QueryStatement\QueryStatementAbstract;


/**
 * Class QueryResultAbstract
 * @package DesignPatterns\Creational\FactoryMethod\QueryResult
 */
abstract class QueryResultAbstract {
    /**
     * @var QueryStatementAbstract
     */
    private $_query_stmt;

    /**
     * QueryResultAbstract constructor.
     * @param QueryStatementAbstract $stmt
     */
    final public function __construct(QueryStatementAbstract $stmt) {
        $this->_query_stmt = $stmt;
    }
}
