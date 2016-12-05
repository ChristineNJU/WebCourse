<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>朋友圈</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="运动,社交,南京大学,软件学院,面向WEB的计算,大作业">

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    <script type="text/javascript" src="/material-design/jquery-2.2.3.js"></script>
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <sctipt type="text/javascript" src="/js/jquery-2.2.3.js"></sctipt>
    <sctipt type="text/javascript" src="/js/moments.js"></sctipt>

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
            <a class="active" href="/moments">好友圈</a>
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
    <div id="userCardMoment">
        <img id="userIcon" src="/img/icon1.jpg"/>
        <h2>Christine张</h2>
        <ul id="momentInfo">
            <li>
                <p class="momentInfoNum">{{$count}}</p>
                <p class="momentInfoName">动态</p>
            </li>
            <li>
                <p class="momentInfoNum">{{$friendC}}</p>
                <p class="momentInfoName">好友</p>
            </li>
        </ul>
    </div>
    <div>
        <div id="momentNew" class="mainContent">
            <div class="mdl-textfield mdl-js-textfield">
                <textarea id="newPost" class="mdl-textfield__input" type="text" rows= "3" ></textarea>
                <label class="mdl-textfield__label" for="sample5">记录一下最近的运动状态吧！</label>
            </div>
            <div class="momentNewTools">
                <label>剩余<span id="word_left">140</span>字</label>
                <button id="submit" class="mdl-button mdl-js-button mdl-button--accent">
                    SUBMIT
                </button>
            </div>
        </div>

        @foreach ($moments as $moment)
        <div class="moment mainContent">
            <div class="momentsInfo">
                <img src="/img/{{$moment->avatar}}.jpg"/>
                <div>
                    <h2>{{$moment->nickname}}</h2>
                    <h3>{{$moment->updated_at}}</h3>
                </div>
            </div>
            <section>
                {{$moment->content}}
            </section>
        </div>
        @endforeach

        {{--<div class="moment mainContent">--}}
            {{--<div class="momentsInfo">--}}
                {{--<img src="/img/icon2.jpg"/>--}}
                {{--<div>--}}
                    {{--<h2>Jack</h2>--}}
                    {{--<h3>2016-09-20 10:00</h3>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<section>--}}
                {{--健了个身--}}
            {{--</section>--}}
        {{--</div>--}}
    </div>
</div>

<footer>

</footer>

<script>
    window.onload = function(){
        $("#newPost").on("input",function(){
            var content = this.value;
            var len = content.length;
            $('#word_left').html(140-len > 0? 140-len:0);
            if(len > 140){
                this.value = content.substring(0,140);
            }
        });
        $("#submit").on("click",function(){
            var content = $('#newPost').val();
            if(content == null || content == ''){
                return ;
            }
            $.ajax({
                type:'post',
                url:'/moments/new',
                dataType:'json',
                beforeSend:function(){
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    content:content,
                },
                success:function(data){
                    console.log(data.status);
                    location.reload();
                },
                fail:function(){
                    console.log("fail");
                }
            });
        });
    }
</script>
</body>
</html>