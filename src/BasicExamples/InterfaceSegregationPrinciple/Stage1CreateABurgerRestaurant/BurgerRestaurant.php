<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage1CreateABurgerRestaurant;

class BurgerRestaurant implements OrderService
{
  public function orderBurger(): Burger
  {
    return new Burger();
  }

  public function orderFries(): Fries
  {
    throw new \Exception('No fries in BurgerRestaurant');
  }

  public function orderChicken(): Chicken
  {
    throw new \Exception('No chicken in BurgerRestaurant');
  }
}