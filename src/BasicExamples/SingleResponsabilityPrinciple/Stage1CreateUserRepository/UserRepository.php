<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage1CreateUserRepository;

interface UserRepository
{
  public function save(User $user): void;
}