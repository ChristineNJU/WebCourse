<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>好友管理</title>

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
            <a class="" href="moments.blade.php">好友圈</a>
            <button id="personal"
                    class="mdl-button mdl-js-button mdl-button--icon"
                    style="margin-left:auto;">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                 for="personal">
                <a href="personalInfo.blade.php" class="mdl-menu__item">个人资料</a>
                <a href="./personalFriends.html" class="mdl-menu__item">好友管理</a>
                <a class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">
    <div>
        <div class="userCard">
            <div class="userCardUp">
                <img class="friendIcon" src="../img/icon1.jpg"/>
                <div id="briefInfo">
                    <h2>自己</h2>
                    <h3>LV.3</h3>
                    <div id="exp">
                        <div id="exp_gain"></div>
                    </div>
                </div>
            </div>

            <div class="userCardDown">
                <ul id="momentInfo">
                    <li>
                        <p class="momentInfoNum">32</p>
                        <p class="momentInfoName">动态</p>
                    </li>
                    <li>
                        <p class="momentInfoNum">8</p>
                        <p class="momentInfoName">好友</p>
                    </li>
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

        </div>

        <nav id="mainNav">
            <a class="" href="personalInfo.blade.php">个人信息</a>
            <a class="active" href="./personalFriends.html">好友管理</a>
        </nav>
    </div>
    <div>
        <nav class="navSecond">
            <a href="./personalFriends.html">好友列表</a>
            <a href="personalFriends_apply.blade.php">好友申请</a>
        </nav>

        <div id="friendsList">
            <div class="friendCard">
                <img class="friendIcon" src="../img/icon1.jpg"/>
                <div>
                    <h2>一个好友</h2>
                    <h3>LV.3</h3>
                </div>
                <button id="friend1"
                        class="mdl-button mdl-js-button mdl-button--icon"
                        style="margin-left:auto;">
                    <i class="material-icons">settings</i>
                </button>
                <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                     for="friend1">
                    <p class="mdl-menu__item">删除好友</p>
                </div>
            </div>

            <div class="friendCard">
                <img class="friendIcon" src="../img/icon1.jpg"/>
                <div>
                    <h2>一个好友</h2>
                    <h3>LV.3</h3>
                </div>
                <button id="friend2"
                        class="mdl-button mdl-js-button mdl-button--icon"
                        style="margin-left:auto;">
                    <i class="material-icons">settings</i>
                </button>
                <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                     for="friend2">
                    <p class="mdl-menu__item">删除好友</p>
                </div>
            </div>

            <div class="friendCard">
                <img class="friendIcon" src="../img/icon1.jpg"/>
                <div>
                    <h2>一个好友</h2>
                    <h3>LV.3</h3>
                </div>
                <button id="friend3"
                        class="mdl-button mdl-js-button mdl-button--icon"
                        style="margin-left:auto;">
                    <i class="material-icons">settings</i>
                </button>
                <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                     for="friend3">
                    <p class="mdl-menu__item">删除好友</p>
                </div>
            </div>

            <div class="friendCard">
                <img class="friendIcon" src="../img/icon1.jpg"/>
                <div>
                    <h2>一个好友</h2>
                    <h3>LV.3</h3>
                </div>
                <button id="friend4"
                        class="mdl-button mdl-js-button mdl-button--icon"
                        style="margin-left:auto;">
                    <i class="material-icons">settings</i>
                </button>
                <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                     for="friend4">
                    <p class="mdl-menu__item">删除好友</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>

</footer>
</body>
</html>