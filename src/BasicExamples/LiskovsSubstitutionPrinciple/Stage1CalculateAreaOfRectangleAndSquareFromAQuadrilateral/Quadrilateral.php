<?php

namespace Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage1CalculateAreaOfRectangleAndSquareFromAQuadrilateral;

abstract class Quadrilateral
{
  protected $width;
  protected $height;

  public abstract function setWidth(int $width): void;
  public abstract function setHeight(int $height): void;

  public function calculateArea(): int
  {
    return $this->width * $this->height;
  }
}