<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage1CreateABurgerRestaurant;

class Restaurant implements OrderService
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