<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>好友管理</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="运动,社交,南京大学,软件学院,面向WEB的计算,大作业">

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">

</head>
<body>
<header>
    <div class="headerWrapper">
        <div id="logo_wrapper">
            SportsMan
        </div>
        <nav id="headerNav">
            <a href="#">首页</a>
            <a class="" href="/activity/all">竞赛</a>
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
                <a href="/logout" class="mdl-menu__item">登出</a>
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
                </ul>
            </div>

        </div>

        <nav id="mainNav">
            <a class="" href="/user">个人信息</a>
            <a class="active " href="/user/friends">好友管理</a>
        </nav>
    </div>
    <div>
        <nav class="navSecond">
            <a href="/user/friends">好友列表</a>
            <a href="/user/friends/apply" class="@if( $count > 0 ) mdl-badge @endif" data-badge="{{$count}}">好友申请</a>
        </nav>

        <div id="friendsList">
            @foreach ($friends as $friend)
            <div class="friendCard">
                <img class="friendIcon" src="/img/{{$friend->avatar}}.jpg"/>
                <div>
                    <h2>{{$friend->nickname}}</h2>
                    {{--<h3>LV.3</h3>--}}
                </div>
                <button id="{{$friend->applyer}}"
                        class="friend_delete mdl-button mdl-js-button mdl-button--icon"
                        style="margin-left:auto;"
                        >
                    <i class="material-icons">settings</i>
                </button>
                <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                     for="{{$friend->applyer}}">
                    <p class="mdl-menu__item" onClick=deleteFriend({{$friend->applyer}})>删除好友</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<footer>

</footer>
<sctipt type="text/javascript" src="/js/jquery-2.2.3.js"></sctipt>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    function deleteFriend(deleted){
        console.log(deleted);
        $.ajax({
            type:'post',
            url:'/user/friends/deleteFriend',
            beforeSend:function(){
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                deleteid:deleted,
            },
            success:function(){
                location.reload();
            },
            fail:function(){

            }
        })
    }
</script>
</body>
</html>