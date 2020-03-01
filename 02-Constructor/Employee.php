<?php

class Employee
{
  // variables
  public $name;
  public $salary;
  public $overTime;

  // methods
  public function __construct(string $name = '', float $salary = 0, float $overTime = 0)
  {
    $this->name = $name;
    $this->salary = $salary;
    $this->overTime = $overTime;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setSalary(float $salary)
  {
    $this->salary = $salary;
  }

  public function setOverTime(float $overTime)
  {
    $this->overTime = $overTime;
  }

  public function display()
  {
    var_dump($this);
  }
}
