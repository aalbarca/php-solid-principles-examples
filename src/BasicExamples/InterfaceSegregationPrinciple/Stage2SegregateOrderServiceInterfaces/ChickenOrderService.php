<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage2SegregateOrderServiceInterfaces;

interface ChickenOrderService
{
  public function orderChicken(): Chicken;
}