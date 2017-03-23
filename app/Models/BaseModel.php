<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Models;

class BaseModel
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return '';
    }

    public function insert($data = [])
    {
        return $this->container->db->insert($this->getSource(), $data);
    }

    public function update($data = [], $where = [])
    {
        if (empty($where)) {
            return 0;
        }

        return $this->container->db->update($this->getSource(), $data, $where);
    }

    public function select($columns, $where)
    {
        return $this->container->db->select($this->getSource(), $columns, $where);
    }

    public function count($where)
    {
        return $this->container->db->count($this->getSource(), $where);
    }

    public function delete($where)
    {
        if (empty($where)) {
            return 0;
        }

        return $this->container->db->delete($this->getSource(), $where);
    }

    public function get($columns, $where)
    {
        return $this->container->db->get($this->getSource(), $columns, $where);
    }

    public function has($where)
    {
        return $this->container->db->has($this->getSource(), $where);
    }

    /**
     * 取指定列最大值
     *
     * @param string $column
     * @param array  $where
     */
    public function max($column = '', $where = [])
    {
        return $this->container->db->max($this->getSource(), $column, $where);
    }

    /**
     * 取指定列最小值
     *
     * @param string $column
     * @param array  $where
     */
    public function min($column = '', $where = [])
    {
        return $this->container->db->min($this->getSource(), $column, $where);
    }
}
