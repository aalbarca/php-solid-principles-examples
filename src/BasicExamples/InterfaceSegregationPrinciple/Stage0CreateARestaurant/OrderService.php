<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage0RestaurantOrderService;

interface OrderService
{
  public function orderBurger(): Burger;

  public function orderFries(): Fries;

  public function orderChicken(): Chicken;
}