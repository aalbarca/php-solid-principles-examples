<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage2CreateEmailAddressAndUserNameValueObjects;

interface UserRepository
{
  public function save(User $user): void;
}