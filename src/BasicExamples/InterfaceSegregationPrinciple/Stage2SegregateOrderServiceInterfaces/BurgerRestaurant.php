<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage2SegregateOrderServiceInterfaces;

class BurgerRestaurant implements BurgerOrderService
{
  public function orderBurger(): Burger
  {
    return new Burger();
  }
}