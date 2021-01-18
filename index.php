<?php
include_once "base.php";
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>

<body data-spy="scroll" data-target="#navspy" data-offset="100">
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
  </div>
  <div class="content">
    <!-- BAR -->
    <nav id="navspy" class="navbar navbar-expand-lg navbar-light sticky-top">
      <a class="navbar-brand row" href="#">
        <!-- <img class="col-6 p-0"src="imge/logo.gif"width="60%" height="60%" alt="" style="margin: 0 20px;"> -->
        <img style="margin-left: 20px;width: 250px;height: 60px;" class="col-6 p-0" src="imge/logof.gif" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto  text-center">
          <li class="nav-item ">
            <a class="nav-link" href="#a1">首頁</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#b">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#c">profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#d">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#e">find</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#f1">connect me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <?php
          if (!empty($_SESSION['login'])) {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="backend.php">manage</a>
            </li>
            
          <?php
          }
          ?>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <!-- 首頁 -->
      <div class="jumbotron jumbotron-fluid pcolor" id="a1" style="padding: 30px 0;">
        <div class="container">
          <div class="row ">
            <div class="col-12 text-center p-3">
              <img src="https://picsum.photos/150/150/?random=1" style="border-radius:50%;box-shadow: 0px 0px 5px #fff;" class="img-fluid">
            </div>
            <div class="col-12 text-center p-2 wow rollIn" style="color: rgb(30,119,166);font-size: 23px; margin-top: -15px;">
              曾俊澄
            </div>
            <div class="col-12 text-center">
              <img src="imge/intro.gif" class="img-fluid ">
            </div>
          </div>


        </div>
      </div>

      <!-- about -->
      <div class="row" id="b">
        <div class="col-12 text-center" style="margin: 30px 0 3px 0;">
          <span>About</span>
        </div>
        <div class="col-12">
          <hr>
        </div>
      </div>
      <div class="row justify-content-center">
        <?php
        $about = $About->all(['sh' => 1]);
        foreach ($about as $ab) {


        ?>
          <div class="col-12 col-md-4"><img src="imge/<?= $ab['img'] ?>" class="img-fluid" style="width:400px"></div>
          <div class="col-12 col-md-8 pcolor"><?= $ab['name'] ?></div>
        <?php
        }
        ?>
      </div>
      <!-- profile -->
      <div class="row" id="c">
        <div class="col-12 text-center" style="margin: 30px 0 3px 0;">
          <span>profile</span>
        </div>
        <div class="col-12">
          <hr>
        </div>
      </div>
      <div class="pcolor row justify-content-center" style="color: white;">
        <div class="row justify-content-center pt-4" style="width:1200px;">
          <?php
          $profile = $Profile->all(["sh" => 1], " order by rank");
          foreach ($profile as $key => $pro) {
          ?>
            <div style="max-width: 500px;max-height: 400px;" class="col-12 col-md-6 text-center wow hinge">
              <div class="pro mb-4">
                <div class="spro"><a href="<?= $pro['href'] ?>"><?= $pro['name'] ?></a>
                  <p><?= $pro['intro'] ?></p>
                </div>
                <img src="imge/<?= $pro['img'] ?>" class="img-fluid " alt="" srcset="" style="width:500px;height:400px">
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
      <!-- experience -->
      <div class="row" id="d">
        <div class="col-12 text-center" style="margin: 30px 0 3px 0;">
          <span>experience</span>
        </div>
        <div class="col-12">
          <hr>
        </div>
      </div>
      <!-- E -->
      <div class="row p-3">
        <div class="col-4 ">
          <div class="list-group d-none d-md-block" id="list-tab" role="tablist">
            <?php
            $experience = $Experience->all(['sh' => 1]);
            foreach ($experience as $key => $exp) {
            ?>
              <a class="list-group-item list-group-item-action list-group-item-info pcolor fsize " href="#p<?= $key ?>" role="tab"><?= $exp['title'] ?></a>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="col-8 scolor">
          <div class="tab-content d-none d-md-block" id="nav-tabContent">
            <?php
            $experience = $Experience->all(['sh' => 1]);
            foreach ($experience as $key => $exp) {
            ?>
              <div class="tab-pane fade  fsize" id="p<?= $key ?>" role="tabpanel"><?= $exp['name'] ?> </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <!-- rwdE -->
      <div class="list-group d-sm-block d-md-none">
        <?php
        $experience = $Experience->all(['sh' => 1]);
        foreach ($experience as $exp) {
        ?><a class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1"><?= $exp['title'] ?></h5>
            </div>
            <p class="mb-1"><?= $exp['name'] ?>
            </p>
          </a>
        <?php
        }
        ?>
      </div>

      <!-- JOBSEARCH -->
      <div class="row" id="e">
        <div class="col-12 text-center" style="margin: 30px 0 3px 0;">
          <span>find</span>
        </div>
        <div class="col-12">
          <hr>
        </div>
      </div>

      <div class="row mx-auto pcolor" style="width:80%; padding: 30px;">
        <?php
        $find = $Find->all(['sh' => 1], " order by rank");
        foreach ($find as $fi) {
        ?>
          <div class="col-12 " style="font-size: 28px;"><em class="scolor"><?= $fi['title'] ?></em> </div>
          <div class="col-12" style="font-size: 20px;"><?= $fi['name'] ?></div>
        <?php
        }
        ?>
      </div>
      <!-- 聯絡我 -->
      <div id="f1"></div>
      <div class="row">
        <div class="col-12 text-center" style="margin: 30px 0 3px 0;">
          <span>connect me</span>
        </div>
        <div class="col-12">
          <hr>
        </div>
      </div>

      <form novalidate class="a" action="api/add_connect.php" method="post">
        <div class="container">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">電話</label>
              <input type="text" class="form-control form-control-lg" name="phone" id="inputEmail4" placeholder="請輸入連絡電話" required>
              <div class="invalid-feedback">
                Don't empty.
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">公司名稱</label>
              <input type="text" class="form-control form-control-lg" name="name" id="inputPassword4" placeholder="請輸入公司名稱" required>
              <div class="invalid-feedback">
                Don't empty.
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">email</label>
            <input type="email" class="form-control form-control-lg" name="email" id="inputAddress" placeholder="請輸入email" required>
            <div class="invalid-feedback">
              Don't empty && type "@".
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">請輸入訊息</label>
            <textarea class="form-control form-control-lg" name="intro" id="exampleFormControlTextarea1" rows="3" placeholder="請輸入訊息" required></textarea>
            <div class="invalid-feedback">
              Don't empty.
            </div>
          </div>
          <div class="row justify-content-center">
            <button type="submit" class="btn btn-info mb-3 scolor">Send</button>
          </div>
        </div>
      </form>
      <!-- 葉偉 -->
      <footer class="pcolor page-f ">
        <div class="row ">
          <div class="col text-center">copyRight@asdasdad</div>
        </div>
      </footer>
    </div>
  </div>
  <div id="toTop"></div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {

      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('a');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);

      $(".progress").width(500).fadeOut(1000, function() {
        $(".content").fadeIn(1000)
      })
      $('#list-tab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
        // $('#list-tab a[href="#list-profile"]').tab('show')
      })

      $(document).scroll(function() { //開始捲動

        if ($(this).scrollTop()) { //如果捲軸拉到了最上方，按鈕淡出
          $('#toTop').fadeIn();
        } else { //如果捲軸拉開了最上方，按鈕淡入
          $('#toTop').fadeOut();
        }



        if ($(this).scrollTop() > ($("#b").offset().top) - 73) { //如果視窗的捲動到了#about區塊的上方

          $("#navspy").css('transition', 'background 0.5s linear'); //背景顏色淡入
          $("#navspy").css('background-color', 'rgba(50, 50, 50, 0.6)');
        } else { //如果視窗的捲動沒有到了#about區塊的上方
          $("#navspy").css('background-color', '#0b2626');

        }
      });

      //點選按鈕頁面自動捲到最上方
      $("#toTop").click(function() {
        $("html, body").animate({
          scrollTop: 0
        }, 1000);
      });

      //選單點選滑動效果
      $("#navspy li a[href^='#']").on('click', function(e) {

        // hash是設定連結#字後面的文字內容
        var target;
        target = this.hash;

        // 連結效果取消
        e.preventDefault();

        // 將導覽列的高度儲存在navOffset變數裡
        var navOffset;
        navOffset = $('#navspy').height();

        // 捲軸滑動開始
        $('html, body').animate({
          scrollTop: $(this.hash).offset().top - navOffset
        }, 600, function() {

          // 增加#字後面的文字內容到URL的最後面
          return window.history.pushState(null, null, target);

        });

      });

      $('.pro').mouseover(function() {
        $(this).append("<style>.pro::before{ font-size:60px }</style>");
      })
      /* .... */
      new WOW().init();
      /* ..... */
      $('#nav-tabContent div:first-child').addClass('show').addClass('active')
      $('#list-tab a:first-child').addClass('active')
      /* .... */
      
    })();
  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>