<?php

include 'Calculate.php';

if (isset($_POST['first_num']) . isset($_POST['second_num'])) {
    $obj = new calculate;
    $obj-> triangle ($_POST['first_num'], $_POST['second_num']) ;
    
} else if (isset($_POST['allone'])) {
    $obj = new calculate;
    $obj->binarycount($_POST['allone']) ;
 
} else if (isset($_POST['part1']) . isset($_POST['part2'])) {
    $paths = new calculate;
    $paths->pparts($_POST['part1'],$_POST['part2']) ;

} else if (isset($_POST['sastry'])) {
    $sastrynum = new calculate;
    $sastrynum->sastrynumber($_POST['sastry']) ;

}