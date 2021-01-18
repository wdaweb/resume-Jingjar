<?php
include_once "../base.php";
foreach($_POST['id'] as $key=>$id){
    if(isset($_POST['del'] )&& in_array($id,$_POST['del'])){
        $About->del($id);
    }else{
        
        $data=$About->find($id);
        
        $data['name']=$_POST['name'][$key];
        $data['sh']=in_array($id,$_POST['sh'])?1:0;
        $About->save($data);
    }
}
to("../back/about.php");