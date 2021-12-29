<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage0CallFromClient;

final class User
{
  private const MAX_NAME_LENGHT = 20;
  private const MIN_NAME_LENGHT = 5;

  private string $name;
  private string $email;

  public function __construct(string $name, string $email)
  {
    $this->checkIfNameIsValid($name);
    $this->checkIfEmailIsValid($email);

    $this->name = $name;
    $this->email = $email;
  }

  public function changeEmail(string $email): void
  {
    $this->checkIfEmailIsValid($email);

    $this->email = $email;
  }

  public function changeName(string $name): void
  {
    $this->checkIfNameIsValid($name);

    $this->name = $name;
  }

  public function save(): void
  {
    $attributes_serialized = serialize([
      'email' => $this->email,
      'name' => $this->name,
    ]);

    file_put_contents('user.database', $attributes_serialized);
  }

  private function checkIfNameIsValid(string $name): void
  {
    $lenght = strlen($name);

    if ($lenght < self::MIN_NAME_LENGHT) {
      throw new \Exception('Name is too short, minimum is ' . self::MIN_NAME_LENGHT);
    }

    if ($lenght > self::MAX_NAME_LENGHT) {
      throw new \Exception('Name is too long, maximum is ' . self::MAX_NAME_LENGHT);
    }
  }

  private function checkIfEmailIsValid(string $email_address): void
  {
    $delimiter = strrpos($email_address, '@' );
    if ($delimiter === false) {
      throw new \InvalidArgumentException( 'Email must contain "@" character' );
    }

    $user_name = substr( $email_address, 0, $delimiter );
    $domain = substr( $email_address, $delimiter + 1 );

    if (trim($domain) === '') {
      throw new \InvalidArgumentException('Email domain cannot be empty');
    }

    if (trim($user_name) === '') {
      throw new \InvalidArgumentException('Local part of email cannot be empty');
    }
  }
}