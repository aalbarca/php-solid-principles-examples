<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage2CreateEmailAddressAndUserNameValueObjects;

final class UserRepositoryInLocalStorage implements UserRepository
{
  public function save(User $user): void
  {
    $attributes_serialized = serialize([
      'email' => $user->email,
      'name' => $user->name,
    ]);

    file_put_contents('user.database', $attributes_serialized);
  }
}