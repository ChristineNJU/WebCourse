<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="运动,社交,南京大学,软件学院,面向WEB的计算,大作业">

    <script type="text/javascript" src="/material-design/material.min.js"></script>
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
                    {{--<h3>LV.3</h3>--}}
                    <div id="exp">
                        <div id="exp_gain"></div>
                    </div>
                </div>
            </div>

            <div class="userCardDown">
                <ul id="momentInfo">
                    <li>
                        <p class="momentInfoNum">{{$momentsC}}</p>
                        <p class="momentInfoName">动态</p>
                    </li>
                    <li>
                        <p class="momentInfoNum">{{$friendC}}</p>
                        <p class="momentInfoName">好友</p>
                    </li>
                    <li>
                        <p class="momentInfoNum">32</p>
                        <p class="momentInfoName">参与竞赛</p>
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

        <form>
            <div id="reviseIcon" class="formItemSelf">
                <h2>头像</h2>
                <div class="">
                    <img src="/img/{{$user->avatar}}.jpg"/>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>用户名</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="userId" value={{$name}} readonly="readonly"/>
                    <label class="mdl-textfield__label" for="userId"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>昵称</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input id="nickname" class="mdl-textfield__input" type="text" value={{$user->nickname}} id="userName" />
                    <label class="mdl-textfield__label" for="userName"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>居住地</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input id="address" class="mdl-textfield__input" type="text" value={{$user->address}} id="city" />
                    <label class="mdl-textfield__label" for="city"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>性别</h2>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="gender" value="男"
                           @if ($user->gender == '男') checked @endif>
                    <span class="mdl-radio__label">男</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="gender" value="女"
                           @if ($user->gender == '女') checked @endif>
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
<sctipt type="text/javascript" src="/js/jquery-2.2.3.js"></sctipt>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    window.onload = function(){
        $('#submit').on('click',function(e){
            e.preventDefault();
            console.log($("input[name='gender']:checked").val());
            $.ajax({
                type:'post',
                url:'/user/reviseInfo',
                beforeSend:function(){
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    nickname:$('#nickname').val(),
                    address:$('#address').val(),
                    gender:$("input[name='gender']:checked").val(),
                },
                success:function(data){
                    console.log(data);
                    location.reload();
                },
                fail:function(){
                    location.reload();
                }
            })
        });
    }
</script>
</body>
</html>