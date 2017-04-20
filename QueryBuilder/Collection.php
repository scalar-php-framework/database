<?php

namespace Scalar\Database\QueryBuilder;

trait Collection
{
   protected $statement;
   protected $params = [];
   protected $count = 0;
   protected $items = [];

   use Common;
}
