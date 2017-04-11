<?php

namespace Scalar\Database;

use Scalar\Database\Interfaces\Builder;

class Model implements Builder
{
    static $switch;
    use \Scalar\Database\Query\Builder\Collection;
}
