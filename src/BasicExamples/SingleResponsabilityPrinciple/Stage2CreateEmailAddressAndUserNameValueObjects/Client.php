<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage2CreateEmailAddressAndUserNameValueObjects;

final class Client
{
  private UserRepository $user_repository;

  public function __construct(UserRepository $user_repository)
  {
    $this->user_repository = $user_repository;
  }

  public function registerUser(string $name, string $email): void
  {
    $user = new User(new UserName($name), new EmailAddress($email));

    $this->user_repository->save($user);
  }
}