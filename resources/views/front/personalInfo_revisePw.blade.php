<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>

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
                <a href="personalFriends.blade.php" class="mdl-menu__item">好友管理</a>
                <a class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">
    <nav id="mainNav">
        <a class="active" href="personalInfo.blade.php">个人信息</a>
        <a class="" href="personalFriends.blade.php">好友管理</a>
    </nav>

    <div>
        <nav class="navSecond">
            <a href="personalInfo.blade.php"> <- 返回个人信息</a>
        </nav>

        <div id="personalInfo" class="mainContent">
            <h1>修改密码</h1>

            <form>
                <div class="formItemSelf">
                    <h2>原密码</h2>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" id="userId" />
                        <label class="mdl-textfield__label" for="userId"></label>
                    </div>
                </div>

                <div class="formItemSelf">
                    <h2>新密码</h2>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" id="userName" />
                        <label class="mdl-textfield__label" for="userName"></label>
                    </div>
                </div>

                <div class="formItemSelf">
                    <h2>确认新密码</h2>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input class="mdl-textfield__input" type="password" id="city" />
                        <label class="mdl-textfield__label" for="city"></label>
                    </div>
                </div>

                <div class="buttonArea">
                    <button id="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        提交
                    </button>
                    <button id="cancel" class="mdl-button mdl-js-button mdl-button--accent">
                        取消
                    </button>
                </div>
            </form>
        </div>
    </div>


</div>

<footer>

</footer>
</body>
</html>