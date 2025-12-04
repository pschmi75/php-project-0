<?php
$var = 1;

class Person {
  private $age;

  public function __construct($pAge) {
    $this->age = $pAge;
  }

  public function setAge($pAge) {
    $this->age = $pAge;
  }

  public function getAge() {
    return $this->age;
  }
}