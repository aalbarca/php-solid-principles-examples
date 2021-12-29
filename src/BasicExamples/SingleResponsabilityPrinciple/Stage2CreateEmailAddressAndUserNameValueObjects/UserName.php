<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage2CreateEmailAddressAndUserNameValueObjects;

final class UserName
{
  private string $value;

  public function __construct(string $name)
  {
    $lenght = strlen($name);

    if ($lenght < self::MIN_NAME_LENGHT) {
      throw new \Exception('Name is too short, minimum is ' . self::MIN_NAME_LENGHT);
    }

    if ($lenght > self::MAX_NAME_LENGHT) {
      throw new \Exception('Name is too long, maximum is ' . self::MAX_NAME_LENGHT);
    }

    $this->value = $name;
  }

  public function getName(): string
  {
    return $this->value;
  }

  public function __toString()
  {
    return $this->getName();
  }
}