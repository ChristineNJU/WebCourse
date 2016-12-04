<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>健康总览</title>

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
            <a href="/activity">竞赛</a>
            <a class="active" href="/health">健康</a>
            <a href="/moments">好友圈</a>
            <button id="personal"
                    class="mdl-button mdl-js-button mdl-button--icon"
                    style="margin-left:auto;">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                 for="personal">
                <a href="/user" class="mdl-menu__item">个人资料</a>
                <a href="/user/friends" class="mdl-menu__item">好友管理</a>
                <a class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">
    <nav id="mainNav">
        <a class="active" href="/health">健康总览</a>
        <a href="/health/sports">运动情况</a>
        <a href="/health/sleep">睡眠分析</a>
    </nav>
    <div class="mainContent">
        <h1>本周身体状况</h1>
        <ul>
            <li>
                <p class="sportsNum">
                    <span>{{$health->milesWeek}}公里</span>
                </p>
                <p class="sportsTitle">
                    运动距离
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span>{{$health->sleepWeek}}%</span>
                </p>
                <p class="sportsTitle">
                    睡眠有效率
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span>{{$health->pointWeek}}</span>
                </p>
                <p class="sportsTitle">
                    健康指数
                </p>
            </li>

        </ul>

        <h1>自使用SportsMan以来</h1>
        <ul>
            <li>
                <p class="sportsNum">
                    <span>{{$health->miles}}公里</span>
                </p>
                <p class="sportsTitle">
                    运动距离
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span>{{$health->sleep}}%</span>
                </p>
                <p class="sportsTitle">
                    睡眠有效率
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span>{{$health->point}}</span>
                </p>
                <p class="sportsTitle">
                    健康指数
                </p>
            </li>

        </ul>

    </div>
</div>

<footer>

</footer>
</body>
</html>