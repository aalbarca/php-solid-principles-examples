<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage1CreateABurgerRestaurant;

interface OrderService
{
  public function orderBurger(): Burger;

  public function orderFries(): Fries;

  public function orderChicken(): Chicken;
}