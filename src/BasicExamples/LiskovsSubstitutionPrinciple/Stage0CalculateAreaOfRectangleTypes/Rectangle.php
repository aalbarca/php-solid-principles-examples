<?php

namespace Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage0CalculateAreaOfRectangleTypes;

class Rectangle
{
  protected int $width;
  protected int $height;

  public function setWidth(int $width): void
  {
    $this->width = $width;
  }

  public function setHeight(int $height): void
  {
    $this->height = $height;
  }

  public function calculateArea(): int
  {
    return $this->height * $this->width;
  }
}