<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage0CallFromClient;

final class Client
{
  public function registerUser(string $name, string $email): void
  {
    $user = new User($name, $email);

    $user->save();
  }
}