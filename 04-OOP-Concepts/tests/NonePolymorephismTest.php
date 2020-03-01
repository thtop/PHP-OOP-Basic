<?php

require '../includes/init.php';

$programmer1 = new Programmer('Somsak', 30000, 5000, 3000);
$programmer2 = new Programmer('Somchai', 45000, 1000, 3000);

$manager1 = new Manager('Somporn', 50000, 2000, 5000);
$manager2 = new Manager('Somjit', 65000, 2500, 5000);


function showProgrammer(Programmer $emp)
{
  echo "Programmer ";
  echo $emp->display();
}

function showManager(Manager $emp)
{
  echo "Manager ";
  echo $emp->display();
}


showProgrammer($programmer1);
showProgrammer($programmer1);
showManager($manager1);
showManager($manager2);
