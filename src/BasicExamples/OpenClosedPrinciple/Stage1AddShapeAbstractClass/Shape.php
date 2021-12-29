<?php

namespace Netflie\BasicExamples\OpenClosedPrinciple\Stage1AddShapeAbstractClass;

abstract class Shape
{
  abstract public function area(): float;
}