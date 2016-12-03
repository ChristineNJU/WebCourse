<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>单个竞赛</title>

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
            <a class="active" href="competition_all.blade.php">竞赛</a>
            <a href="health_total.blade.php">健康</a>
            <a href="moments.blade.php">好友圈</a>
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
        <img id="userIcon" src="/img/icon1.jpg"/>
        <h2>Christine张</h2>
        <ul id="momentInfo">
            <li>
                <p class="momentInfoNum">32</p>
                <p class="momentInfoName">参与竞赛</p>
            </li>
            <li>
                <p class="momentInfoNum">85%</p>
                <p class="momentInfoName">胜率</p>
            </li>
        </ul>
    </div>
    <div style="width:690px;">
        <nav class="navSecond">
            <a href="competition_all.blade.php"> <- 返回全部竞赛</a>
            <!--<button id="participate2" class="mdl-button mdl-js-button mdl-button&#45;&#45;raised mdl-js-ripple-effect mdl-button&#45;&#45;accent">-->
                <!--我要参加-->
            <!--</button>-->
        </nav>

        <div id="competitionDetail" class="mainContent">
            <div class="competition mdl-js-button mdl-js-ripple-effect">
                <img class="competitionIcon" src="/img/icon_flag.png"/>
                <div class="competitionBrief">
                    <div>
                        <h2>一天跑步时长比拼</h2>
                        <h3>2016-10-31 00:00 ~ 2016-10-31 23:59</h3>
                    </div>
                </div>
                <div class="competitionPeople">
                    <h4>3/4</h4>
                    <h5>参与人数</h5>
                </div>
            </div>
            <div id="competitionContent">
                <button id="participate" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    我要参加
                </button>

                <h1>发起人 · 发起时间</h1>
                <div class="creatorInfo">
                    <img class="creator" src="/img/icon1.jpg"/>
                    <div>
                        <p class="name">ChristineZ</p>
                        <p class="time">2016-10-29</p>
                    </div>
                </div>


                <h1>参与人员</h1>
                <div class="participates">
                    <img class="participate" src="/img/icon1.jpg"/>
                    <img class="participate" src="/img/icon1.jpg"/>
                    <img class="participate" src="/img/icon1.jpg"/>
                </div>
            </div>
        </div>
    </div>

</div>

<footer>

</footer>
</body>
</html>