<?php
include_once "base.php";
?>
<script src="jquery-1.9.1.min.js"></script>
<form>
<fieldset style="width:50%;margin:20px auto">
    <legend>會員登入</legend>
    <table>
        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td><input type="button" value="登入" onclick="login()"><input type="reset" value="清除"></td>
            <td><a href="?do=forget">忘記密碼</a>|<a href="?do=reg">尚未註冊</a></td>
        </tr>
    </table>    

</fieldset>
</form>
<script>
function login(){
    let acc=$("#acc").val()
    let pw=$("#pw").val()

    $.post("api/chkacc.php",{acc},function(res){
        console.log(acc,res)
        if(res==1){
            $.post('api/chkpw.php',{acc,pw},function(r){
                if(r==1){
                    if(acc=='a'){
                        location.href="backend.php";
                        $_SESSION['acc']=1;
                    }else{
                       location.href="index.php";
                    }
                }else{
                    alert("密碼錯誤");
                    $("#acc,#pw").val("");
                }
            })
        }else{
            alert(res+"錯")
            $("#acc,#pw").val("");
        }
    })
}


</script>