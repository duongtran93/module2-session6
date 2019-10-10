<?php
include_once "MyList.php";

$myList = new MyList();
$myList->MyList();
$myList->addLastArr(1);
$myList->addLastArr(2);
$myList->addLastArr(3);
$myList->addLastArr(4);
$myList->addLastArr(5);
$myList->add(3, 7);
$myList->remove(2);


print_r($myList);
echo "<br>";
var_dump($myList->clear());