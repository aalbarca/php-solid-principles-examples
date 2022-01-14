<?php

namespace Netflie\BasicExamples\DependencyInversionPrinciple\Stage0SendEmailFromOvh;

final class OvhSmptClient
{
  public function send(Email $email): void
  {
    // send e-mail from ovh smpt servers
  }
}