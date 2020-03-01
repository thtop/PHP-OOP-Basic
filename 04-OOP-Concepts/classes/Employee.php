<?php

abstract class Employee
{
  // variables
  protected $name;
  protected $salary;
  protected $overTime;

  // methods
  public function __construct(string $name = '', float $salary = 0, float $overTime = 0)
  {
    $this->name = $name;
    $this->setSalary($salary);
    $this->overTime = $overTime;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setSalary(float $salary)
  {
    if ($salary > 0) {
      $this->salary = $salary;
    } else {
      echo "Salary must be greater than 0";
      exit;
    }
  }

  public function setOverTime(float $overTime)
  {
    $this->overTime = $overTime;
  }

  protected function total()
  {
    return $this->salary + $this->overTime;
  }

  public function display()
  {
    echo "Name: $this->name, Total: " . $this->total(), PHP_EOL;
  }
}
