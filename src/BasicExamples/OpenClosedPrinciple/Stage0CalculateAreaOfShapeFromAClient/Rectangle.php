<?php

namespace Netflie\BasicExamples\OpenClosedPrinciple\Stage0CalculateAreaOfShapeFromAClient;

final class Rectangle
{
  private float $width;
  private float $height;

  public function __construct(float $width, float $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function width(): float
  {
    return $this->width;
  }

  public function height(): float
  {
    return $this->height;
  }
}

