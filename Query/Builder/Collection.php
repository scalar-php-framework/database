<?php

namespace Scalar\Database\Query\Builder;

trait Collection
{
   protected $statement;
   protected $params = [];
   protected $count = 0;
   protected $items = [];

   use Common;
}
