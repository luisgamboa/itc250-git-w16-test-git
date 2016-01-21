<?php
//item-test.php

/*
    This serves as a resource for 
    our second Group project
*/


include 'Item.php';

$items[] = new Item("Burrito","Includes awesome sauce!",7.95);
$items[] = new Item("Tamales","Includes delicious meat!",2.43);
$items[] = new Item("Tacos","Includes spicy sauce and cream!",3.50);

echo '<pre>';
    var_dump($items);
echo '</pre>';