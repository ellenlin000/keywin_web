<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css_img_hover/set1.css" />
    <link type="text/css" rel="stylesheet" href="materialize/css/hover.css" rel="stylesheet" media="all">
    <!--<link type="text/css" rel="stylesheet" href="materialize/css/style.css" rel="stylesheet" media="all"-->
    <!--icon字型-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
    #section3 {
        height: 200px;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center 50% center 50%;
        background-image: url(img/sec1_photo.jpg);
    }
    
    #keywin_logo {
        margin-top: 100px
    }
    
    #footer_cl_one {
        margin-top: 200px;
        margin-left: 100px;
    }
    </style>
</head>

<body>
    <!--寄信功能-->
    <?php 
if(@$_POST['nickname']!=''){
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$content=$_POST['content'];

mb_internal_encoding("utf-8");
$to="ariel_1225@hotmail.com.tw";//填入自己的電子信箱
$subject=mb_encode_mimeheader("$sub","utf-8");
$message="$content";
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=utf-8\r\n";
$headers.="From:".mb_encode_mimeheader("$nickname","utf-8")."<$email>\r\n";
mail($to,$subject,$message,$headers);
}
?>
    <!--桌面、平板導覽列-->
    <div class="navbar-fixed">
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><img src="svg/Logo.svg" width="180px" height="70px" style="position:relative;"></img>
                </a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <!--Main item-->
                <ul class="right hide-on-med-and-down">
                    <li><a href="#index.html"><i class="material-icons">home</i></a></li>
                    <li><a href="#about.html">關於我們</a></li>
                    <li><a class="dropdown-button" href="#product.html" data-activates="dropdown_product"> 設備硬體 <i class="material-icons right">expand_more</i></a></li>
                    <li><a class="dropdown-button" href="#solution.html" data-activates="dropdown_solution"> 解決方案 <i class="material-icons right">expand_more</i></a></li>
                    <li><a class="dropdown-button" href="#news.html" data-activates="dropdown_news"> 消息公布 <i class="material-icons right">expand_more</i></a></a>
                    </li>
                    <li><a class="dropdown-button" href="#support.html" data-activates="dropdown_support"> 技術支援 <i class="material-icons right">expand_more</i></a></a>
                    </li>
                    <li><a href="#contect.html">連絡我們</a></li>
                    <!--DropDown sub item-->
                    <ul id="dropdown_product" class="dropdown-content">
                        <li><a href="http://www.keywin.com.tw/product01.asp">伺服器</a></li>
                        <li><a href="#!">工作站</a></li>
                        <li><a href="#!">網路設備</a></li>
                        <li><a href="#!">儲存裝置</a></li>
                    </ul>
                    <ul id="dropdown_solution" class="dropdown-content">
                        <li><a href="">高速雲端系統</a></li>
                        <li><a href="#!">企業電腦系統</a></li>
                        <li><a href="#!">雲端電腦系統</a></li>
                        <li><a href="#!">辦公室資訊系統</a></li>
                    </ul>
                    <ul id="dropdown_news" class="dropdown-content">
                        <li><a href="#!">業務消息</a></li>
                        <li><a href="#!">產品消息</a></li>
                    </ul>
                    <ul id="dropdown_support" class="dropdown-content">
                        <li><a href="#!">常見問題</a></li>
                        <li><a href="#!">維修流程</a></li>
                    </ul>
                </ul>
                <!--手機板-->
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="#index.html">回首頁</a></li>
                    <li class="divider"></li>
                    <li><a href="#about.html">關於我們</a></li>
                    <li class="divider"></li>
                    <li><a href="#product.html">設備硬體</a></li>
                    <li class="divider"></li>
                    <li><a href="#solution.html">解決方案</a></li>
                    <li class="divider"></li>
                    <li><a href="#news.html">消息公布</a></li>
                    <li class="divider"></li>
                    <li><a href="#support.html">技術支援</a></li>
                    <li class="divider"></li>
                    <li><a href="#contect.html">連絡我們</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!--主內容-->
    <div class="section">
        <!--跑馬燈-->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="img/mans-hand-is-trying-to-reach-the-sun-picjumbo-com.jpg">
                    <!-- random image -->
                    <div class="caption center-align">
                        <h3 style="color:#333;text-shadow:3px 3px 3px #cccccc;">凱穩電腦</h3>
                        <h5 style="color:#333;text-shadow:3px 3px 3px #cccccc;">專業伺服器的系統整合供應商</h5>
                    </div>
                </li>
                <li>
                    <img src="img/macbook-on-living-room-table-picjumbo-com.jpg">
                    <!-- random image -->
                    <div class="caption left-align">
                        <h3 style="color:#333">設備硬體</h3>
                        <h5 style="color:#333">種類齊全的硬體</h5>
                        <a href="#">了解更多</a>
                    </div>
                </li>
                <li>
                    <img src="img/night-owl-man-working-on-computer-at-night-picjumbo-com.jpg">
                    <!-- random image -->
                    <div class="caption right-align">
                        <h3>企業解決方案</h3>
                        <h5 class="light grey-text text-lighten-3">我們提供的不只是硬體<br/>讓企業解決方案替您分勞解憂</h5>
                        <a href="#">了解更多</a>
                    </div>
                </li>
                <li>
                    <img src="img/white-workspace-with-macbook-picjumbo-com.jpg">
                    <!-- random image -->
                    <div class="caption center-align">
                        <h3 style="color:#333">選擇我們</h3>
                        <h5 style="color:#333">您最佳的合作夥伴</h5>
                        <a href="#about" class="hvr-sink">
                            <i class="material-icons large black-text">keyboard_arrow_down</i>
                        </a>
                    </div>
                </li>
        </div>
        <div class="row" style="padding-top: 150px;padding-bottom: 20px">
            <div class="container">
                <div class="col s12 m12 l12 center">
                    <h1>歡迎！</h1>
                    <h5>繼續探索</h5>
                </div>
                <div class="center col s12 l12 m12" style="margin: 70px 0 50px 0">
                    <a href="#about" class="hvr-sink">
                        <i class="material-icons superlarge black-text">keyboard_arrow_down</i>
                    </a>
                </div>
            </div>
        </div>
        <!--分隔線-->
    <div class="parallax-container">
        <div class="parallax"><img src="img/sec1_photo.jpg"></div>
    </div>
        <!--關於我們-->
        <div id="about" class="row scrollspy" style="; background-color: #F3F3F3">
            <div class="col s12">
                <div id="section1" style="margin-top: 0px; margin-bottom: 50px">
                    <div class="center">
                        <h1>關於我們</h1>
                        <p>公司理念、業務範圍</p>
                    </div>
                </div>
                <div class="center" style="margin-bottom: 50px">
                    <button class="btnforabout hvr-icon-forward">了解更多</button>
                </div>
                <div class="container">
                    <div class="center">
                        <a href="#news" class="hvr-sink">
                            <i class="material-icons large black-text">keyboard_arrow_down</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <!--分隔線-->
    <div class="parallax-container">
        <div class="parallax"><img src="img/sec1_photo.jpg"></div>
    </div>
    <!--消息公告-->
    <div id="news" class="row scrollspy" style="padding-top: 150px ;padding-bottom: 150px;">
        <div id="section2" class="container">
            <div class="center">
                <h1>消息公告</h1>
                <p>業務消息、商品消息</p>
                <div class="row">
                    <div class="col s12 l6">
                        <h4>業務消息</h4>
                        <ul>
                            <li><span class="date ">類別</span><a href="#" target="#">業務消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">業務消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">業務消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">業務消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">業務消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">業務消息標題</a></li>
                        </ul>
                    </div>
                    <div class="col s12 l6">
                        <h4>商品消息</h4>
                        <ul>
                            <li><span class="date ">類別</span><a href="#" target="#">商品消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">商品消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">商品消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">商品消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">商品消息標題</a></li>
                            <li><span class="date ">類別</span><a href="#" target="#">商品消息標題</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--技術支援-->
    <div class="row scrollspy" style="padding-top: 150px ;padding-bottom: 150px; background-color: #122757">
        <div class="container">
            <div class="col s12 m5 l5 center">
                <i class="material-icons white-text superlarge">desktop_mac</i>
            </div>
            <div class="col s12 m7 l7 center">
                <h1 class="white-text">技術支援</h1>
                <p class="white-text">常見問題、維修流程</p>
                <button class="btnforabout2 hvr-bounce-to-bottom">了解更多</button>
            </div>
        </div>
    </div>
    <!--連絡我們-->
    <div class="row scrollspy" style="padding-top: 200px; padding-bottom: 200px;">
        <div class="container">
            <div class="row">
                <div class="col s12 m5 l5 center">
                    <div><i class="material-icons superlarge">mail_outline</i></div>
                </div>
                <div class="col s12 m7 l7 center">
                    <h1>連絡我們</h1>
                    <p>公司地址、分機電話</p>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12" style="margin-top: 100px">
                    <form>
                        <div class="input-field col s12">
                            <input placeholder="請輸入姓名" id="nickname" type="text" class="validate">
                            <label for="nickname">姓名</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="請輸入正確的信箱">您的信箱</label>
                        </div>
                        <div class="input-field col s12">
                            <input placeholder="請輸入公司名稱" id="subject" type="text" class="validate">
                            <label for="subject">主旨</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="content" type="text" class="validate">
                            <label for="content">問題</label>
                        </div>
                    </form>
                </div>
            </div>
            <button class="btnforabout hvr-icon-forward"><a href="mailto:keywin@keywin.com.tw ?subject=我是主旨 &body=姓名:%0A電話:%0A單位:%0A問題:">這個是開啟outlook的</a></button>
            <button class="btnforabout hvr-icon-forward">這個是填一填然後送信的</button>
        </div>
    </div>
    </div>
    <!--Footer-->
    <footer class="page-footer">
        <div class="container">
            <!--footer左邊供應商-->
            <div class="row">
                <div class="col l4 m4 s12 center" style="margin-top: 40px; margin-bottom: 10px ">
                    <h5>我們的供應商</h5>
                    <ul>
                        <li>
                            <div class="logo-container" style="margin-top: 10px">
                                <img src="svg/Intel Pp2016_k_2s.svg" width="200px"></img>
                            </div>
                        </li>
                        <li>
                            <div class="logo-container">
                                <img src="svg/Dell_PartnerDirect_Preferred_2014.svg" width="200px" "></img>
                    </div>
                </li>
                <li>
                    <div class="logo-container " style="margin-bottom: 40px ">
                        <img src="svg/VMW_09Q4_LGO_PARTNER_SOLUTION_PROVIDER_PRO.svg " width="100px "></img>
                    </div>
                </li>
            </ul>
            </div>
                <!--footer右邊快速連結-->
                <div class="col l4 m4 s12 " style="margin-top: 40px; margin-bottom: 100px ">
                <h5>如何造訪我們?</h5>
                    <div style="color: #555555 ">
                        <ul>
                        <li><i class="material-icons blue-text ">phone_in_talk</i>886-2-8226-1888</li>
                        <li><i class="material-icons blue-text ">print</i>886-2-8227-8941</li>
                        <li><i class="material-icons blue-text ">room</i>新北市中和區中正路716號15F之1(遠東世紀廣場L棟)</li>
                        </ul>
                    </div> 
                </div>

                <div class="col l4 m4 s12 " style="margin-top: 40px; margin-bottom: 100px ">
                <h5>相關連結</h5>
                    <div style="color: #555555 ">
                        <ul>
                        <li><a style="color: #555555 " href="http://www.1111.com.tw/job-bank/company-description.asp?nNo=9591322 " target="_blank "><i class="material-icons blue-text ">person</i>人才招募</a></li>
                        <li><a style="color: #555555 " href="https://www.facebook.com/2015serverzhuji/?fref=ts " target="_blank "><i class="fa fa-facebook-square blue-text fa-2x " aria-hidden="true "></i> 臉書粉絲團</a></li>
                        <li><i class="material-icons blue-text ">pie_chart</i>google分析</li>
                        <li><i class="material-icons blue-text ">record_voice_over</i>客服信箱</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-copyright ">
            <div class="center " style="color: #555555 ">
                © 2016 Copyright KeyWin
            </div>
        </div>
        </div>
    </footer>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript " src="https://code.jquery.com/jquery-2.1.1.min.js "></script>
    <script type="text/javascript " src="materialize/js/materialize.min.js "></script>
    <script type="text/javascript " src="materialize/js/index.js "></script>
    <script type="text/javascript " src="materialize/js/jpuery-2.1.1.min.js "></script>
    <!--Initialization -->
    <script>
    $(document).ready(function() {
        $('.scrollspy').scrollSpy(scrollOffset: 64);
        $(".button-collapse ").sideNav();

        $(".dropdown-button ").dropdown();

        $('.carousel.carousel-slider').carousel({
            full_width: true
        });
        $('.slider').slider();
        $(".hover ").mouseleave(
            function() {
                $(this).removeClass("hover ");
            }
        );

        $(".active ").mouseleave(
            function() {
                $(this).removeClass("active ");
            }
        );
        $('.parallax').parallax();
    });
    </script>
</body>

</html>
