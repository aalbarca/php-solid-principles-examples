<?php

namespace Netflie\BasicExamples\OpenClosedPrinciple\Stage1AddShapeAbstractClass;

final class Rectangle extends Shape
{
  private float $width;
  private float $height;

  public function __construct(float $width, float $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function area(): float
  {
    return $this->width * $this->height;
  }
}

