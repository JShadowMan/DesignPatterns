<?php
/**
 * QueryStmtementAbstract.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2017 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Creational\FactoryMethod\QueryStatement;


/**
 * Class QueryStatementAbstract
 * @package DesignPatterns\Creational\FactoryMethod\QueryStatement
 */
abstract class QueryStatementAbstract {
    /**
     * @var string
     */
    private $_table_name;

    /**
     * @var int
     */
    private $_statement_type;

    /**
     * QueryStatementAbstract constructor.
     * @param int $statement_type
     * @param string $table
     */
    final public function __construct($statement_type, $table) {
        $this->_table_name = $table;
        $this->_statement_type = $statement_type;
    }
}
