<?php

namespace Netflie\Tests\LiskovsSubstitutionPrinciple\Stage1CalculateAreaOfRectangleAndSquareFromAQuadrilateral;

use Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage1CalculateAreaOfRectangleAndSquareFromAQuadrilateral\Rectangle;
use Netflie\BasicExamples\LiskovsSubstitutionPrinciple\Stage1CalculateAreaOfRectangleAndSquareFromAQuadrilateral\Square;
use PHPUnit\Framework\TestCase;

class CalculateAreaTest extends TestCase
{
  public function test_calculate_area_of_rectangle_from_rectangle()
  {
    $quadrilateral = new Rectangle();
    $quadrilateral->setWidth(4);
    $quadrilateral->setHeight(2);

    $expected_area = 8;

    $this->assertEquals($expected_area, $quadrilateral->calculateArea());
  }

  public function test_calculate_area_of_rectangle_from_square()
  {
    $quadrilateral = new Square();
    $quadrilateral->setWidth(4);

    $expected_area = 16;

    $this->assertEquals($expected_area, $quadrilateral->calculateArea());
  }
}