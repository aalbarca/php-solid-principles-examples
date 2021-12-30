<?php

namespace Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage1CalculateAreaOfRectangleAndSquareFromAQuadrilateral;

final class Rectangle extends Quadrilateral
{
  public function setWidth(int $width): void
  {
    $this->width = $width;
  }

  public function setHeight(int $height): void
  {
    $this->height = $height;
  }
}