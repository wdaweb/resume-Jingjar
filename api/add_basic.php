<?php
include_once "../base.php";

$_POST['sh']=1;

print_r($_POST);
$Basic->save($_POST);
to("../back/basic.php");





?>