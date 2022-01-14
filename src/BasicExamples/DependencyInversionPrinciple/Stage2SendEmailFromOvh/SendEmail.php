<?php

namespace Netflie\BasicExamples\DependencyInversionPrinciple\Stage2SendEmailFromOvh;

final class SendEmail
{
  private SmptClient $smpt_client;

  public function __construct(SmptClient $smpt_client)
  {
    $this->smpt_client = $smpt_client;
  }

  public function send(Email $email): void
  {
    $this->smpt_client->send($email);
  }
}