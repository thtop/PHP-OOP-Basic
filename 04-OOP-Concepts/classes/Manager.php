<?php

class Manager extends Employee
{
  private $position;

  public function __construct(string $name = '', float $salary = 0, float $overTime = 0, float $position)
  {
    parent::__construct($name, $salary, $overTime);
    $this->position = $position;
  }

  protected function total()
  {
    return parent::total() + $this->position;
  }

  public function display()
  {
    parent::display();
  }
}
