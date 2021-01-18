<?php
include_once "../base.php";

$_POST['sh']=1;

print_r($_POST);
$Experience->save($_POST);
to("../back/experience.php");





?>