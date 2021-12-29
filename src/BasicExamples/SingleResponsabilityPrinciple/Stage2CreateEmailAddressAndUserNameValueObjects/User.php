<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage2CreateEmailAddressAndUserNameValueObjects;

final class User
{
  private const MAX_NAME_LENGHT = 20;
  private const MIN_NAME_LENGHT = 5;

  private UserName $name;
  private EmailAddress $email;

  public function __construct(UserName $name, EmailAddress $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function changeEmail(EmailAddress $email): void
  {
    $this->email = $email;
  }

  public function changeName(UserName $name): void
  {
    $this->name = $name;
  }
}