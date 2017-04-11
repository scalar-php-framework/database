<?php

namespace Scalar\Database\Query\Builder;

trait Collection
{
   protected $statement;
   protected $params = [];
   protected $count = 0;
   public $items = [];

   use \Scalar\Database\Query\Builder\Common;
}
