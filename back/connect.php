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
        <button onclick="javascript:location.href='profile.php'">作品管理</button>
        <button onclick="javascript:location.href='about.php'">關於我管理</button>
        <button onclick="javascript:location.href='find.php'">工作條件檢視</button>
        <button onclick="javascript:location.href='experience.php'">經驗管理</button>
    </div>
</div>
<?php
include_once "../base.php";
$connect = $Connect->all();
?>
<style>
    table{
        border: 1px solid black;
        margin: 10px auto;
        width: 800px;
        background: blanchedalmond;
    }
    td{
        width: 25%;
        border: 1px solid black;
        border-collapse:collapse;
    }
</style>
<table>
    <tr>
        <td>電話</td>
        <td>email</td>
        <td>公司名稱</td>
        <td>短訊</td>
    </tr>
    <?php
    foreach ($connect as $co) {
    ?>
        <tr>
        <td><?=$co['phone']?></td>
        <td><?=$co['email']?></td>
        <td><?=$co['name']?></td>
        <td><?=$co['intro']?></td>
    </tr>
    <?php
    }
    ?>
</table>