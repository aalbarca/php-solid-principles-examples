<?php

namespace Netflie\BasicExamples\OpenClosedPrinciple\Stage0CalculateAreaOfShapeFromAClient;

final class Circle
{
  private float $radius;

  public function __construct(float $radius)
  {
    $this->radius = $radius;
  }

  public function radius(): float
  {
    $this->radius;
  }
}