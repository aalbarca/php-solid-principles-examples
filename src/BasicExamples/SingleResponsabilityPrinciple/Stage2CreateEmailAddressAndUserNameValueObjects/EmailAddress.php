<?php

namespace Netflie\BasicExamples\SingleResponsabilityPrinciple\Stage2CreateEmailAddressAndUserNameValueObjects;

final class EmailAddress {

  private $userName;
  private $domain;

  public function __construct(string $emailAddress)
  {
    $delimiter = strrpos( $emailAddress, '@' );
    if ( $delimiter === false ) {
      throw new \InvalidArgumentException( 'Email must contain "@" character' );
    }

    $this->user_name = substr( $emailAddress, 0, $delimiter );
    $this->domain = substr( $emailAddress, $delimiter + 1 );

    if ( trim( $this->domain ) === '' ) {
      throw new \InvalidArgumentException( 'Email domain cannot be empty' );
    }

    if ( trim( $this->user_name ) === '' ) {
      throw new \InvalidArgumentException( 'Local part of email cannot be empty' );
    }
  }

  public function getUserName(): string {
    return $this->user_name;
  }

  public function getDomain(): string {
    return $this->domain;
  }

  public function getFullAddress(): string {
    return $this->user_name . '@' . $this->domain;
  }

  public function __toString(): string {
    return $this->getFullAddress();
  }

}