<?php
include_once "../base.php";

$profile=$Profile->find($_POST['id']);
//print_r($profile);

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
}



print_r($_POST);

$Profile->save($_POST);

to("../back/profile.php");

?>