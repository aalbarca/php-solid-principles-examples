<?php

namespace Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage0CalculateAreaOfRectangleTypes;

class Square extends Rectangle
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