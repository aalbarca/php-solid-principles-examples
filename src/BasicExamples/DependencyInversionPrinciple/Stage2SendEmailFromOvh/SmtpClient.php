<?php

namespace Netflie\BasicExamples\DependencyInversionPrinciple\Stage2SendEmailFromOvh;

interface SmptClient
{
  public function send(Email $email): void;
}