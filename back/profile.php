<?Php
include_once "../base.php";
?>
<script src="../jquery-1.9.1.min.js"></script>
<style>
    .box {
        margin: 0 auto;

        width: 100vw;

    }

    .sbox {
        display: flex;
        width: 100%;
        justify-content:space-around;
        background: indianred;
    }

    .sbox div {
        width: 20%;
        text-align: center;
        color: white;
        font-size: 25px;
        word-break: break-all;
        margin: 3px;
    }
</style>
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
        <button onclick="javascript:location.href='find.php'">工作條件管理</button>
        <button onclick="javascript:location.href='about.php'">關於我管理</button>
        <button onclick="javascript:location.href='connect.php'">問卷檢視</button>
        <button onclick="javascript:location.href='experience.php'">經驗管理</button>
        <button onclick="javascript:location.href='basic.php'">簡介管理</button>
        <button onclick="javascript:location.href='../index.php'">首頁</button>
        <button onclick="logout()">登出</button>
    </div>
</div><div>
    <button onclick="javascript:location.href='add-profile.php'">新增作品</button>
</div>
<div class="row">
    <div class="col-4" style="border:1px solid black;background:#ccc;">圖片</div>
  
    <div class="col-2" style="border:1px solid black;background:#ccc;">名稱</div>
    <div class="col-3" style="border:1px solid black;background:#ccc;">網址</div>
    <div class="col-3" style="border:1px solid black;background:#ccc;">簡介</div>
    
</div>


<div class="box">

    <?php
    $profile = $Profile->all(" order by rank");
    foreach ($profile as $key => $pro) {
    ?>
        <div class="sbox row">
            <div ><img src="../imge/<?= $pro['img'] ?>" style="width:80px"></div>
            <div ><?= $pro['name'] ?></div>
            <div ><?= $pro['href'] ?></div>
            <div ><?= $pro['intro'] ?></div>
            <div >
                <button class="btn btn-primary btn-sm" onclick="display('profile',<?= $pro['id']; ?>)"><?= ($pro['sh'] == 1) ? '顯示' : '隱藏'; ?></button>
                <?php
                if ($key != 0) {
                ?>
                    <button class="btn btn-primary btn-sm"onclick="sw(<?= $pro['id']; ?>,<?= $profile[$key - 1]['id']; ?>)">往上</button>
                <?php
                }
                ?>

                <?php
                if ($key != (count($profile) - 1)) {
                ?>
                    <button class="btn btn-primary btn-sm"onclick="sw(<?= $pro['id']; ?>,<?= $profile[$key + 1]['id']; ?>)">往下</button>
                <?php
                }
                ?>
                <button class="btn btn-primary btn-sm"onclick="javascript:location.href='edit-profile.php?id=<?= $pro['id']; ?>'">編輯</button>
                <button class="btn btn-primary btn-sm"onclick="del('profile',<?= $pro['id']; ?>)">刪除</button>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<script>
    function sw(idx, idy) {
        $.post('../api/sw.php', {
            table: 'profile',
            idx,
            idy
        }, function() {
            location.reload()
        })
    }

    function del(table, id) {
        $.post('../api/del.php', {
            table,
            id
        }, function() {
            location.reload()
        })
    }

    function display(table, id) {
        $.post('../api/display.php', {
            table,
            id
        }, function() {
            location.reload()
        })
    }
    
    function logout(){
    $.get("../api/logout.php",function(){
        location.href='../index.php';
    })
}
</script>