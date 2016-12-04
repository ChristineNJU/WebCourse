<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新建竞赛</title>

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    {{--<script type="text/javascript" src="/material-design/jquery-2.2.3.js"></script>--}}
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <sctipt type="text/javascript" src="/js/jquery-2.2.3.js"></sctipt>

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
                <a href="/user/friends" class="mdl-menu__item">好友管理</a>
                <a class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">
    <div>
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
        <nav id="mainNav">
            <a href="/activity/new">
                新建竞赛
            </a>
        </nav>
    </div>


    <div id="personalInfo" class="mainContent">
        <h1>编辑竞赛</h1>
        <form>
            <input class="mdl-textfield__input" type="hidden" id="competitionId" />
            <div class="formItemSelf">
                <h2>竞赛名称</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="userId" />
                    <label class="mdl-textfield__label" for="userId"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>人数上限</h2>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                    <span class="mdl-radio__label">有</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="0">
                    <span class="mdl-radio__label">无</span>
                </label>
            </div>

            <div class="formItemSelf">
                <h2>人数</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="peopleCount" pattern="^[1-9]\d*$"/>
                    <label class="mdl-textfield__label" for="userId"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>时间</h2>
                <div class="">
                    <input class="" type="date" rows= "3" id="timeBegin" />
                </div>
                <h2 style="margin-left: 50px;">结束时间</h2>
                <div class="">
                    <input class="" type="date" rows= "3" id="timeEnd" />
                </div>
            </div>

            <div class="formItemSelf" style="height:100px;">
                <h2>描述</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea>
                    <label class="mdl-textfield__label" for="sample5">竞赛详情描述</label>
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

<footer>

</footer>
</body>
</html>