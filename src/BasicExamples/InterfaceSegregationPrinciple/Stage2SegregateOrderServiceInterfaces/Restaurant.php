<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage2SegregateOrderServiceInterfaces;

class Restaurant implements BurgerOrderService, FriesOrderService, ChickenOrderService
{
  public function orderBurger(): Burger
  {
    return new Burger();
  }

  public function orderFries(): Fries
  {
    return new Fries();
  }

  public function orderChicken(): Chicken
  {
    return new Chicken();
  }
}