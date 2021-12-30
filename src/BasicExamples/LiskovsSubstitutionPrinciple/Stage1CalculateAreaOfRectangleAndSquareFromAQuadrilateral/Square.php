<?php

namespace Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage1CalculateAreaOfRectangleAndSquareFromAQuadrilateral;

final class Square extends Quadrilateral
{
  public function setWidth(int $width): void
  {
    $this->width = $width;
    $this->height = $width;
  }

  public function setHeight(int $height): void
  {
    $this->width = $height;
    $this->height = $height;
  }
}