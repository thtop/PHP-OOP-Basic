<?php

require '../includes/init.php';

$programmer = new Programmer('Somsak', 30000, 5000, 3000);
$manager = new Manager('Somporn', 50000, 2000, 5000);

$programmer->display();
$manager->display();
