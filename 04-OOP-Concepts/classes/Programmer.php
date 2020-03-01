<?php

class Programmer extends Employee
{
  private $skill;

  public function __construct(string $name = '', float $salary = 0, float $overTime = 0, float $skill)
  {
    parent::__construct($name, $salary, $overTime);
    $this->skill = $skill;
  }

  protected function total()
  {
    return parent::total() + $this->skill;
  }

  public function display()
  {
    parent::display();
  }
}
