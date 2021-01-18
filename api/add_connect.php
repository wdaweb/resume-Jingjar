<?php
include_once "../base.php";
print_r($_POST);
$Connect->save($_POST);
to('../index.php');
?>