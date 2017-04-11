<?php

namespace Scalar\Database\Interfaces;

interface Builder
{
    public function select();

    public function from($table);
}
