<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>朋友圈</title>

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
<header>
    <div class="headerWrapper">
        <div id="logo_wrapper">
            SportsMan
        </div>
        <nav id="headerNav">
            <a href="#">首页</a>
            <a href="competition_all.blade.php">竞赛</a>
            <a href="health_total.blade.php">健康</a>
            <a class="active" href="moments.blade.php">好友圈</a>
            <button id="personal"
                    class="mdl-button mdl-js-button mdl-button--icon"
                    style="margin-left:auto;">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                 for="personal">
                <a href="personalInfo.blade.php" class="mdl-menu__item">个人资料</a>
                <a href="personalFriends.blade.php" class="mdl-menu__item">好友管理</a>
                <a class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">
    <div id="userCardMoment">
        <img id="userIcon" src="../img/icon1.jpg"/>
        <h2>Christine张</h2>
        <ul id="momentInfo">
            <li>
                <p class="momentInfoNum">32</p>
                <p class="momentInfoName">动态</p>
            </li>
            <li>
                <p class="momentInfoNum">8</p>
                <p class="momentInfoName">好友</p>
            </li>
        </ul>
    </div>
    <div>
        <div id="momentNew" class="mainContent">
            <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea>
                <label class="mdl-textfield__label" for="sample5">记录一下最近的运动状态吧！</label>
            </div>
            <div class="momentNewTools">
                <label>剩余<span>11</span>字</label>
                <button class="mdl-button mdl-js-button mdl-button--accent">
                    SUBMIT
                </button>
            </div>
        </div>
        <div class="moment mainContent">
            <div class="momentsInfo">
                <img src="../img/icon1.jpg"/>
                <div>
                    <h2>Christine张中文字体为什么会变形？</h2>
                    <h3>2016-10-31 10:00</h3>
                </div>
            </div>
            <section>
                跑了个半马
                跑了个半马运动好累啊可是还要微笑着面对hhhhhhhh就为
                了在朋友圈装一个发个照片晒个马甲线回去就狂吃狂吃
            </section>
        </div>
        <div class="moment mainContent">
            <div class="momentsInfo">
                <img src="../img/icon1.jpg"/>
                <div>
                    <h2>Christine张中文字体为什么会变形？</h2>
                    <h3>2016-10-31 10:00</h3>
                </div>
            </div>
            <section>
                跑了个半马
                跑了个半马运动好累啊可是还要微笑着面对hhhhhhhh就为
                了在朋友圈装一个发个照片晒个马甲线回去就狂吃狂吃
            </section>
        </div>
    </div>
</div>

<footer>

</footer>
</body>
</html>