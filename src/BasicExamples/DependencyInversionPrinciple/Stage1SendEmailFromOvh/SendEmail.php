<?php

namespace Netflie\BasicExamples\DependencyInversionPrinciple\Stage1SendEmailFromOvh;

final class SendEmail
{
  private OvhSmtpClient $ovh_smtp_client;

  public function __construct(OvhSmtpClient $ovh_smtp_client)
  {
    $this->ovh_smtp_client = $ovh_smtp_client;
  }

  public function send(Email $email): void
  {
    $this->ovh_smtp_client->send($email);
  }
}