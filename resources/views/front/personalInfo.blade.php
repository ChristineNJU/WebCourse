<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>

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
            <a class="" href="/activity">竞赛</a>
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
            <a class="active" href="/user">个人信息</a>
            <a class="" href="/user/friends">好友管理</a>
        </nav>
    </div>

    <div id="personalInfo" class="mainContent">
        <h1>个人信息</h1>
        <a href="#">
            <button id="reviseInfo" class="mdl-button mdl-js-button mdl-button--accent">
                修改资料
            </button>
        </a>
        <a href="personalInfo_revisePw.blade.php">
            <button id="revisePw" class="mdl-button mdl-js-button mdl-button--accent">
                修改密码
            </button>
        </a>
        <form>
            <div id="reviseIcon" class="formItemSelf">
                <h2>头像</h2>
                <div class="">
                    <img src="../img/icon1.jpg"/>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>用户名</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="userId" readonly="readonly"/>
                    <label class="mdl-textfield__label" for="userId"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>昵称</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="userName" />
                    <label class="mdl-textfield__label" for="userName"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>居住地</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="city" />
                    <label class="mdl-textfield__label" for="city"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>性别</h2>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                    <span class="mdl-radio__label">男</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                    <span class="mdl-radio__label">女</span>
                </label>
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

<footer>

</footer>
</body>
</html>