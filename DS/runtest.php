<?php
require("Queue.php");
require("Stack.php");

$myWife = new Stack();
for($i = 1 ; $i <= 10 ; $i ++){
    $myWife->pushMethod("Vợ ".$i);
}

echo "STACK \n";
// Show all vợ
$myWife->display();

//Li hôn vợ ms nhất
echo "\n";
$myWife->popMethod();
$myWife->display();
echo "\n";

echo "Queue\n";
$myBaby = new Queue();
for($i = 1 ; $i <= 10 ; $i ++){
    $myBaby->pushMethod("Baby ".$i);
}
// Show all Baby
$myBaby->display();
echo "\n";

//Chia tay Baby cũ nhất
$myBaby->shiftMethod();
$myBaby->display();
