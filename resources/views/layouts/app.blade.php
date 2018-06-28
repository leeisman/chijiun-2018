<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <title>騏駿科技有限公司</title>
    @yield('assets')
</head>
<body>

<header>
    <div id="web-header">
        <div class="container">
            <div class="header-left">
                <img src="http://www.chijiun.orgates.net/images/logo.png" alt="chijiun-logo">
            </div>
            <div class="header-right">
                <div class="menu">
                    <nav>
                        <ul>
                            <li class="dropdown"><a href="/">產品介紹</a>
                                <div class="dropdown-content">
                                    <a href="#ll">鋰離子電池組</a>
                                    <a href="#lg">鋰聚合物電池組</a>
                                    <a href="#ls">磷酸鋰鐵電池組</a>
                                    <a href="#nc">鈕扣型電池</a>
                                </div>
                            </li>
                            <li><a href="#">關於我們</a></li>
                            <li><a href="#">服務介紹</a></li>
                            <li><a href="#">聯絡我們</a></li>
                            <li class="language"><a href="#">English</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="phone-header">
        <div class="header-left">
            <a href="#">
                <img src="http://www.chijiun.orgates.net/images/gif_us.gif" alt="">
                English
            </a>
        </div>
        <div class="header-right">
            <div class="bar">
                <label for="nav-toggle">
                    <i class="fas fa-bars"></i>
                </label>
            </div>
        </div>
        <div class="clear"></div>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="/">產品介紹</a></li>
                <li><a href="#">關於我們</a></li>
                <li><a href="#">服務介紹</a></li>
                <li><a href="#">聯絡我們</a></li>
            </ul>
        </nav>
    </div>
</header>

<body>
@yield('content')
</body>

<div id="footer">
    <div class="container">
        <div class="flex-container">

            <div class="left-half">
                <h5 class="attention-title">關注我們</h5>
                <div class="attention-icon">
                    <div class="facebook">f</div>
                    <div class="youtube"></div>
                </div>
            </div>

            <div class="left-half">
                <h5 class="attention-title">相關事項</h5>
                <div class="something">
                    <ul>
                        <li><a href="/#ll">鋰離子電池組</a></li>
                        <li><a href="/#lg">鋰聚合物電池組</a></li>
                        <li><a href="/#ls">磷酸鋰鐵電池組</a></li>
                        <li><a href="/#nc">鈕扣型電池</a></li>
                        <li><a href="">ISO證書</a></li>
                        <li><a href="">產品責任險</a></li>
                    </ul>
                </div>
            </div>

            <div class="right">
                <h5 class="attention-title">聯絡資訊</h5>
                <div>
                    騏駿電池服務 (02) 8993-3299 | 營業時間 09:00 - 18:00 <br>
                    新北市新莊區中港路 - 132 巷 8 號 1 樓 <br>
                    <a href="mailto:chijiun.telstar@msa.hinet.net">業務諮詢 chijiun.telstar@msa.hinet.net</a>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright">
        <div class="container">
            Copyright 2018 © 騏駿科技有限公司 All Rights Reserved.
        </div>
    </div>
</div>

</body>
<script>
    $('nav a').click(function (event) {
        var href = event.target.href;
        var subStart = event.target.href.indexOf("#");
        var subEnd = event.target.href.length;
        var animateID = href.substr(subStart, subEnd);
        $('html,body').animate({scrollTop: $(animateID).offset().top}, 1200);
    });
</script>
@yield('js')
</html>