<?php

require '../includes/init.php';

$programmer1 = new Programmer('Somsak', 30000, 5000, 3000);
$programmer2 = new Programmer('Somchai', 45000, 1000, 3000);

$manager1 = new Manager('Somporn', 50000, 2000, 5000);
$manager2 = new Manager('Somjit', 65000, 2500, 5000);


function show(Employee $emp)
{
  if ($emp instanceof Programmer) {
    echo "Programmer ";
    echo $emp->display();
  } elseif ($emp instanceof Manager) {
    echo "Manager ";
    echo $emp->display();
  }
}

// show($programmer1);
// show($programmer1);
// show($manager1);
// show($manager2);


if ($programmer1 instanceof Employee) {
  echo "Programmer instanceof Employee \n";
}

if ($programmer1 instanceof Programmer) {
  echo "Programmer instanceof Programmer";
}
