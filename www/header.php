<?php
	include_once( "./g5/common.php" );   
	include_once(G5_LIB_PATH.'/outlogin.lib.php'); 
  include_once('./g5/lib/latest.lib.php');
?>
<?php

//// 게시판
$abc = "";
if($bo_table == "k_notice") {
    $abc = "../../";
} else {}
?>

<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>대한물산</title>
  
  <!--Jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!--Swiper-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

  <!--Gsap-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>

  <!-- custom -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
  <link rel="stylesheet" href="<?php echo $abc; ?>css/fonts.css">
  <link rel="stylesheet" href="<?php echo $abc; ?>css/animate.css">
  <link rel="stylesheet" href="<?php echo $abc; ?>css/aos.css">
  <link rel="stylesheet" href="<?php echo $abc; ?>css/main.css">
  <link rel="stylesheet" href="<?php echo $abc; ?>css/sub.css">
  <link rel="stylesheet" href="<?php echo $abc; ?>css/mob.css">

  <script src="<?php echo $abc; ?>js/aos.js"></script>
  <script src="<?php echo $abc; ?>js/menu.js"></script>
  <script src="<?php echo $abc; ?>js/index.js"></script>

  <!-- poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <script>
    AOS.init({
      duration: 800,
    });
  </script>
  <div id="wrap">
    <div id="header">
      <div id="header_inner">
        <ul class="gnb">
          <li>
            <a href="<?php echo $abc ?>contact.php?num=1_2" class="tommy">About</a>
            <ul class="sub_nav">
              <li <?php if ($_GET['num'] == '1_2' ) { ?> class="on" <?php  } else {}; ?>>
                <a href="<?php echo $abc ?>contact.php?num=1_2">About us</a>
              </li>
              <li <?php if ($_GET['num'] == '1_1' ) { ?> class="on" <?php  } else {}; ?>>
                <a href="<?php echo $abc ?>contact.php?num=1_1">Certificate</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?php echo $abc ?>contact.php?num=2_1" class="tommy">Products</a>
            <ul class="sub_nav">
              <li>
                <a href="<?php echo $abc ?>contact.php?num=2_1">클레오파트라 제품</a>
              </li>
              <li>
                <a href="<?php echo $abc ?>contact.php?num=2_1_1">일반 제품</a>
              </li>
            </ul>
          </li>
        </ul>

        <div class="logo">
          <a href="<?php echo $abc ?>index.php">
            <img src="<?php echo $abc ?>img/logo.png" alt="대한물산" class="main_logo">
          </a>
        </div>

        <ul class="gnb">
          <li>
            <a href="<?php echo $abc ?>contact.php?num=3_1" class="tommy">Facilities</a>
          </li>
          <li>
            <a href="<?php echo $abc ?>contact.php?num=4_2" class="tommy">Notice</a>
            <!-- <ul class="sub_nav">
              <li>
                <a href="https://daehanmulsan2023.cafe24.com/g5/bbs/board.php?bo_table=k_notice">Notice</a>
              </li>
              <li <?php if ($_GET['num'] == '4_2' ) { ?> class="on" <?php  } else {}; ?>>
                <a href="<?php echo $abc ?>contact.php?num=4_2">Inquiry</a>
              </li>
            </ul> -->
          </li>
        </ul>

        <!--
        <div class="go_shop">
          <a href="#">
            SHOP
          </a>
        </div>
        -->

        <!--
        <div class="scroll">
          <div class="scroll_bar">
            <p class="move_bar"></p>
          </div>
          <p class="cafe24">Scroll</p>
        </div>
        -->

        <div class="menu_icon">
          <div id="nav-icon">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <p class="hamburger_txt upper white">MENU</p>
          </div>
        </div>
      </div>
      
      <div class="nav_box2">
        <div class="nav2_wrap">
          <div class="nav_box2_bg"><img src="img/nav_box2_bg.png" alt=""></div>
          <div class="nav_box2_cont">
            <div class="nav_box2_wrap">
              <ul class="mob_nav">
                <li class="sub_navbox">
                  <p class="mob_tit">회사소개</p>
                  <ul class="sub_nav">
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=1_1" class="light">회사소개</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=1_2" class="light">CEO 인사말</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=1_3" class="light">연혁</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=1_4" class="light">인증서</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=1_5" class="light">오시는 길</a>
                    </li>
                  </ul>
                </li>
                <li class="sub_navbox">
                  <p class="mob_tit">설비현황</p>
                  <ul class="sub_nav">
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=2_1" class="light">생산설비</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=2_2" class="light">성심연구소</a>
                    </li>
                  </ul>
                </li>
                <li class="sub_navbox">
                  <p class="mob_tit">제품소개</p>
                  <ul class="sub_nav">
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=3_2">NB</a>
                    </li>
                    <li class="bot">
                      <a href="<?php echo $abc ?>contact.php?num=3_3">PB</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=3_4">Halal</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=3_5">etc.</a>
                    </li>
                  </ul>
                </li>
                <li class="sub_navbox">
                  <p class="mob_tit">커뮤니티</p>
                  <ul class="sub_nav">
                    <li>
                      <a href="https://sungsim2023.cafe24.com/g5/bbs/board.php?bo_table=ko_notice">성심소식</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=4_2">문의하기</a>
                    </li>
                    <li>
                      <a href="<?php echo $abc ?>contact.php?num=4_3">카달로그</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="layout">
      

    <!--게시판-->
<?php
if( $bo_table == "k_notice") {    ?>

  <section class="sub_top sub_top1_1">
    <div class="sub_top_bg">
      <img src="<?php echo $abc ?>img/s4/sub_top4_1.png" alt="">
    </div>
    <div class="sub_top_p">
      <p class="big cafe24" data-aos="fade-up">Notice</p>
      <p class="small light" data-aos="fade-up">공지사항</p>
    </div>
  </section>
  <p class="s111_tit s411_tit" data-aos="fade-up">공지사항</p>
  <section class="sub sub_board" data-aos="fade-up">
    <div class="s_inner">
    <?php echo outlogin("outlogin2");  ?>

<?php
} else{}
    