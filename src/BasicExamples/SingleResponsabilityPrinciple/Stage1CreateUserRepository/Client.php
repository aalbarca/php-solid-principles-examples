<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage1CreateUserRepository;

final class Client
{
  private UserRepository $user_repository;

  public function __construct(UserRepository $user_repository)
  {
    $this->user_repository = $user_repository;
  }

  public function registerUser(string $name, string $email): void
  {
    $user = new User($name, $email);

    $this->user_repository->save($user);
  }
}