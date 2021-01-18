<?php
include_once "../base.php";
foreach($_POST['id'] as $key=>$id){
    if(isset($_POST['del'] )&& in_array($id,$_POST['del'])){
        $Find->del($id);
    }else{
        
        $data=$Find->find($id);
        $data['title']=$_POST['title'][$key];
        $data['name']=$_POST['name'][$key];
        $data['sh']=in_array($id,$_POST['sh'])?1:0;
        $Find->save($data);
    }
}
to("../back/find.php");