<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>竞赛管理</title>

    <script type="text/javascript" src="../node_modules/material-design-lite/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../node_modules/material-design-lite/material.min.css">
    <link rel="stylesheet" type="text/css" href="../node_modules/material-design-icons/iconfont/material-icons.css">
    <link rel="stylesheet" type="text/css" href="../sass/css/common.css">

</head>
<body>
<header>
    <div class="headerWrapper">
        <div id="logo_wrapper">
            SportsMan - 后台管理
        </div>
        <nav id="headerNav">
            <a href="#">首页</a>
            <a href="./competition_all.html">竞赛</a>
            <button id="personal"
                    class="mdl-button mdl-js-button mdl-button--icon"
                    style="margin-left:auto;">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                 for="personal">
                <a href="./admin_competition.html" class="mdl-menu__item">活动管理</a>
                <a class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">


    <nav id="mainNav">
        <a class="active" href="./admin_competition.html">活动管理</a>
        <!--<a class="active" href="./personalFriends.html">好友管理</a>-->
    </nav>

    <div id="competitionManage" class="mainContent">
        <h1>活动管理</h1>

        <table>
            <tr>
                <th>竞赛名称</th>
                <th>发起人</th>
                <th>发起时间</th>
                <th>操作</th>
            </tr>

            <tr class="tableRow">
                <td>啦啦啦一起跑步</td>
                <td>ChristineZhang</td>
                <td>2016-10-31</td>
                <td>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">delete</i>
                    </button>

                </td>
            </tr>

            <tr class="tableRow">
                <td>啦啦啦一起跑步</td>
                <td>ChristineZhang</td>
                <td>2016-10-31</td>
                <td>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">delete</i>
                    </button>

                </td>
            </tr>

        </table>
    </div>
</div>

<footer>

</footer>
</body>
</html>