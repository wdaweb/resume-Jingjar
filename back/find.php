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
        <button onclick="javascript:location.href='connect.php'">問卷檢視</button>
        <button onclick="javascript:location.href='experience.php'">經驗管理</button>
        <button onclick="logout()">登出</button>
    </div>
</div>
<script src="../jquery-1.9.1.min.js"></script>
<?php
include_once "../base.php";
?>
<h3 class="ct" style="margin:0">工作條件</h3>
<div style="width:100% ;display:flex;align-items:around;">
    <div style="width:25%;margin:0 1px;background:#999">條件標題</div>
    <div style="width:25%;margin:0 1px;background:#999">條件內容</div>
    <div style="width:25%;margin:0 1px;background:#999">排序</div>
    <div style="width:25%;margin:0 1px;background:#999">操作</div>
</div>
<form action="../api/edit_find.php" method='post'>
    <div style="width:100%;height:200px;overflow-y:scroll;color:black">
    <?php
        $find = $Find->all(" order by rank");
        foreach ($find as $key => $p) {
        ?>
            <div style="width:100% ;display:flex ;align-items:around;background:white;margin:1px 0" class='ct'>
                <div style="width: 25%;">
                   <input type="text" name="title[]" value="<?= $p['title'] ?>">
                </div>
                <div style="width: 25%;display:inline-block;">
                    <textarea name="name[]" ><?= $p['name'] ?></textarea>
                </div>
                <div style="width: 25%;">
                    <?php
                    if ($key != 0) {
                    ?>
                        <input type="button" value="往上" onclick="sw(<?= $p['id'] ?>,<?= $find[$key - 1]['id'] ?>)">
                    <?php
                    }
                    if ($key != (sizeof($find) - 1)) {
                    ?>
                        <input type="button" value="往下" onclick="sw(<?= $p['id'] ?>,<?= $find[$key + 1]['id'] ?>)">
                    <?php
                    }
                    ?>
                </div>
                <div style="width: 25%;">
                    <input type="checkbox" name="sh[]" value="<?= $p['id'] ?>" <?= ($p['sh'] == 1) ? "checked" : "" ?>>顯示
                    <input type="checkbox" name="del[]" value="<?= $p['id'] ?>">刪除
                </div>
                <input type="hidden" name="id[]" value="<?= $p['id'] ?>">
            </div>
        <?php
        }

        ?>

        <input type="submit" value="確定修改">
    </div>
</form>



<hr>
<h3>新增求職條件</h3>
<form action="../api/add_find.php" method="post" >
    <table>
        <tr>
            <td>新增標題</td>
            <td><input type="text" name="title"></td>
            <td>新增內容</td>
            <td><textarea name="name"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="新增">
</form>
<script>
    function sw(idx,idy){
    $.post('../api/sw.php',{table:'find',idx,idy},function(){       
        location.reload()
    })
}

function logout(){
    $.get("../api/logout.php",function(){
        location.href='../index.php';
    })
}

</script>