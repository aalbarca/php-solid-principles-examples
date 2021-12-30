<?php

namespace Netflie\BasicExamples\InterfaceSegregationPrinciple\Stage2SegregateOrderServiceInterfaces;

interface BurgerOrderService
{
  public function orderBurger(): Burger;
}