<?php

namespace Netflie\Tests\LiskovsSubstitutionPrinciple\Stage0CalculateAreaOfRectangleTypes;

use Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage0CalculateAreaOfRectangleTypes\Rectangle;
use Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage0CalculateAreaOfRectangleTypes\Square;
use PHPUnit\Framework\TestCase;

class CalculateAreaTest extends TestCase
{
  public function test_calculate_area_of_rectangle_from_rectangle()
  {
    $rectangle = new Rectangle();
    $rectangle->setWidth(4);
    $rectangle->setHeight(2);

    $expected_area = 8;

    $this->assertEquals($expected_area, $rectangle->calculateArea());
  }

  public function test_calculate_area_of_rectangle_from_square()
  {
    $rectangle = new Square();
    $rectangle->setWidth(4);
    $rectangle->setHeight(2);

    $expected_area = 8;

    $this->assertEquals($expected_area, $rectangle->calculateArea());
  }
}