<?php

namespace Netflie\BasicExamples\OpenClosedPrinciple\Stage0CalculateAreaOfShapeFromAClient;

final class Client
{
  public function calculateArea($shape): float
  {
    if ($shape instanceof Rectangle) {
      return $shape->width() * $shape->height();
    } elseif ($shape instanceof Circle) {
      return $shape->radius() * $shape->radius() * pi();
    } else {
      throw new \Exception('Shape is not supported');
    }
  }
}