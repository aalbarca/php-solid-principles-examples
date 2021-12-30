<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage2SegregateOrderServiceInterfaces;

interface FriesOrderService
{
  public function orderFries(): Fries;
}