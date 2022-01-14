<?php

namespace Netflie\BasicExamples\DependencyInversionPrinciple\Stage2SendEmailFromOvh;

final class OvhSmptClient implements SmptClient
{
  public function send(Email $email): void
  {
    // send e-mail from ovh smpt servers
  }
}