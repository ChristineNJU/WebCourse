<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>所有竞赛</title>

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
            <a class="active" href="/activity">竞赛</a>
            <a href="/health">健康</a>
            <a href="/moments">好友圈</a>
            <button id="personal"
                    class="mdl-button mdl-js-button mdl-button--icon"
                    style="margin-left:auto;">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                 for="personal">
                <a href="/user" class="mdl-menu__item">个人资料</a>
                <a href="/user/frinds" class="mdl-menu__item">好友管理</a>
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
                <p class="momentInfoName">参与竞赛</p>
            </li>
            <li>
                <p class="momentInfoNum">85%</p>
                <p class="momentInfoName">胜率</p>
            </li>
        </ul>
    </div>
    <div>
        <nav class="navSecond">
            <a href="/activity">所有竞赛</a>
            <a href="/activity">我参与的</a>
        </nav>
        <div>
            <a href="activity/detail">
                <div class="competition mainContent mdl-js-button mdl-js-ripple-effect">
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
            </a>

            <a href="activity/detail">
                <div class="competition mainContent">
                    <img class="competitionIcon" src="/img/icon_pk.png"/>
                    <div class="competitionBrief">
                        <div>
                            <h2>一个比赛</h2>
                            <h3>2016-10-31 00:00 ~ 2016-10-31 23:59</h3>
                        </div>
                    </div>
                    <div class="competitionPeople">
                        <h4>11</h4>
                        <h5>参与人数</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<footer>

</footer>
</body>
</html>