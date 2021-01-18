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
        <button onclick="javascript:location.href='find.php'">工作條件管理</button>
        <button onclick="javascript:location.href='experience.php'">經驗管理</button>
        <button onclick="logout()">登出</button>
    </div>
</div>
<script src="../jquery-1.9.1.min.js"></script>
<form action="../api/add_profile.php" method="post" enctype="multipart/form-data">
    <table style="width:100%">
        <tr>
            <td width="20%" style="vertical-align:top;text-align:right">做品資料</td>
            <td>
                <div>作品名：<input type="text" name="name"></div>
                <div>作品連結：<input type="text" name="href"></div>
                <div>作品圖片：<input type="file" name="img"></div>
                
            </td>
        </tr>
        <tr>
            <td style="vertical-align:top;text-align:right">作品簡介</td>
            <td><textarea name="intro"  style="width:98%;height:60px"></textarea>
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="新增"> <input type="reset" value="重置">
    
    </div>
</form>
<script>
function logout(){
    $.get("../api/logout.php",function(){
        location.href='../index.php';
    })
}
</script>