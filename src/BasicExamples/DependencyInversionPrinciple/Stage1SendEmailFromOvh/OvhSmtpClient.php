<?php

namespace Netflie\BasicExamples\DependencyInversionPrinciple\Stage1SendEmailFromOvh;

final class OvhSmptClient
{
  public function send(Email $email): void
  {
    // send e-mail from ovh smpt servers
  }
}