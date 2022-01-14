<?php

namespace Netflie\BasicExamples\DependencyInversionPrinciple\Stage0SendEmailFromOvh;

final class SendEmail
{
  private OvhSmtpClient $ovh_smtp_client;

  public function __construct()
  {
    $this->ovh_smtp_client = new OvhSmtpClient;
  }

  public function send(Email $email): void
  {
    $this->ovh_smtp_client->send($email);
  }
}