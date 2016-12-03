<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>运动情况</title>

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
            <a class="active" href="health_total.blade.php">健康</a>
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
    <nav id="mainNav">
        <a href="health_total.blade.php">健康总览</a>
        <a class="active" href="health_sports.blade.php">
            运动情况
        </a>
        <a href="health_sleep.blade.php">睡眠分析</a>
    </nav>
    <div class="mainContent">
        <h1>运动情况</h1>
        <input id="datePicker" name="datePicker" type="date"/>
        <ul id="sportsStatics">
            <li>
                <p class="sportsNum">
                    <span>13</span>km
                </p>
                <p class="sportsTitle">
                    累计运动距离
                </p>
            </li>
            <li>
                <p class="sportsNum">
                    <span>2</span>day
                </p>
                <p class="sportsTitle">
                    累计运动天数
                </p>
            </li>
            <li>
                <p class="sportsNum">
                    <span>55</span>min
                </p>
                <p class="sportsTitle">
                    累计运动时间
                </p>
            </li>
            <li>
                <p class="sportsNum">
                    <span>523</span>k
                </p>
                <p class="sportsTitle">
                    累计燃烧热量
                </p>
            </li>
        </ul>

        <h1>运动曲线</h1>
        <div class="graphic">

        </div>
    </div>
</div>

<footer>

</footer>
</body>
</html>