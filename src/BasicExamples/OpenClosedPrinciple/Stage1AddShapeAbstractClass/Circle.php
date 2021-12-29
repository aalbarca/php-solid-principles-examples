<?php

namespace Netflie\BasicExamples\OpenClosedPrinciple\Stage1AddShapeAbstractClass;

final class Circle extends Shape
{
  private float $radius;

  public function __construct(float $radius)
  {
    $this->radius = $radius;
  }

  public function area(): float
  {
    return $shape->radius * $shape->radius * pi();
  }
}