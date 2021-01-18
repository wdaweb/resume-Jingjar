<?php
include_once "../base.php";

$_POST['sh']=1;
$_POST['rank']=$Find->q("select max(rank) from find")[0][0]+1;
print_r($_POST);
$Find->save($_POST);
to("../back/find.php");





?>