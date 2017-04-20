<?php

namespace Scalar\Database;

use Scalar\Database\Interfaces\Builder;

class Model implements Builder
{
    use QueryBuilder\Collection,
        Connection;
}
