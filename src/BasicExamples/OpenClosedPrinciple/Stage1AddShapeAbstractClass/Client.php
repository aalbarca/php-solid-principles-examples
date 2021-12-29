<?php

namespace Netflie\BasicExamples\OpenClosedPrinciple\Stage1AddShapeAbstractClass;

final class Client
{
  public function calculateArea(Shape $shape): float
  {
    return $shape->area();
  }
}