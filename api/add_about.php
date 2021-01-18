<?php
include_once "../base.php";
if(!empty($_FILES['about']['tmp_name'])){
    $_POST['img']=$_FILES['about']['name'];
    move_uploaded_file($_FILES['about']['tmp_name'],'../imge/'.$_FILES['about']['name']);
}
$_POST['sh']=1;
$_POST['rank']=$About->q("select max(rank) from about")[0][0]+1;
print_r($_POST);
$About->save($_POST);
to("../back/about.php");





?>