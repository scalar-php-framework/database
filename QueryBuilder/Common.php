<?php

namespace Scalar\Database\QueryBuilder;

trait Common
{
    public function select()
    {
        $args = func_get_args();
        $split_args = implode(', ', $args);
        $this->statement = "SELECT {$split_args}";
        return $this;
    }

    public function from($table)
    {
       $this->statement .= " FROM {$table}";
       return $this;
    }
}
