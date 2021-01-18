<?php
include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../imge/'.$_FILES['img']['name']);
}
$_POST['sh']=1;
$_POST['rank']=$Profile->q("select max(rank) from profile")[0][0]+1;
print_r($_POST);
$Profile->save($_POST);
to("../back/profile.php");