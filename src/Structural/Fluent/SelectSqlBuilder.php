<?php
/**
 * SelectSqlBuilder.php
 *
 * @package   PHPDesignPatterns
 * @author    ShadowMan <shadowman@shellboot.com>
 * @copyright Copyright (C) 2016-2018 ShadowMan
 * @license   MIT License
 * @link      https://github.com/JShadowMan/here
 */
namespace DesignPatterns\Structural\Fluent;
use PHPUnit\Runner\Exception;


/**
 * Class SqlBuilder
 * @package DesignPatterns\Structural\Fluent
 */
final class SelectSqlBuilder {
    /**
     * @var array
     */
    private $_components;

    /**
     * SqlBuilder constructor.
     */
    final public function __construct() {
        $this->_components = array();
    }

    /**
     * @param string[] ...$args
     * @return SelectSqlBuilder
     */
    final public function fields(string ...$args): self {
        $this->_components['fields'] = $args;

        return $this;
    }

    /**
     * @param string $table_name
     * @return SelectSqlBuilder
     */
    final public function from(string $table_name): self {
        $this->_components['from'] = $table_name;

        return $this;
    }

    /**
     * @param string $field
     * @param string $equal
     * @return SelectSqlBuilder
     */
    final public function where(string $field, string $equal): self {
        $this->_components['where'] = array(
            'field' => $field,
            'equal' => $equal
        );

        return $this;
    }

    /**
     * @param int $limit
     * @return SelectSqlBuilder
     */
    final public function limit(int $limit): self {
        $this->_components['limit'] = $limit;

        return $this;
    }

    /**
     * @param int $offset
     * @return SelectSqlBuilder
     */
    final public function offset(int $offset): self {
        $this->_components['offset'] = $offset;

        return $this;
    }

    /**
     * @return string
     */
    final public function __toString(): string {
        if (!isset($this->_components['fields']) || !isset($this->_components['from'])) {
            return '';
        }

        $sql = sprintf('select %s from %s', join(',', $this->_components['fields']), $this->_components['from']);
        if (isset($this->_components['where'])) {
            $sql .= " where {$this->_components['where']['field']}='{$this->_components['where']['equal']}'";
        }

        if (isset($this->_components['limit'])) {
            $sql .= " limit {$this->_components['limit']}";
        }

        if (isset($this->_components['offset'])) {
            $sql .= " offset {$this->_components['offset']}";
        }

        return $sql;
    }
}
