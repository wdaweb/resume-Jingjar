<?php
include_once "base.php";
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="css/css.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<title>backend</title>
<div class="row" id="b">
    <div class="col-12 text-center" style="margin: 30px 0 3px 0;">
        <span>backend</span>
    </div>
    <div class="col-12">
        <hr>
    </div>
</div>
<div class="row justify-content-center">
    <div class="row">
        <button onclick="javascript:location.href='./back/profile.php'">作品管理</button>
        <button onclick="javascript:location.href='./back/about.php'">關於我管理</button>
        <button onclick="javascript:location.href='./back/connect.php'">問卷檢視</button>
        <button onclick="javascript:location.href='./back/experience.php'">經驗管理</button>
        <button onclick="javascript:location.href='./back/find.php'">工作條件管理</button>
        <button onclick="javascript:location.href='index.php'">首頁</button>
        <button onclick="logout()">登出</button>
    </div>
</div>
<script>
function logout(){
    $.get("api/logout.php",function(){
        location.href='index.php';
    })
}
</script>