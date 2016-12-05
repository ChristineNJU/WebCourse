<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>单个竞赛</title>
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
            <a class="active" href="/activity/all">竞赛</a>
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
        <div id="userCardMoment">
            <img id="userIcon" src="/img/icon1.jpg"/>
            <h2>Christine张</h2>
            <ul id="momentInfo">
                <li>
                    <p class="momentInfoNum">{{$count}}</p>
                    <p class="momentInfoName">参与竞赛</p>
                </li>
            </ul>
        </div>
        <nav id="mainNav">
            <a href="/activity/new/getNew">
                新建竞赛
            </a>
        </nav>
    </div>
    <div style="width:690px;">
        <nav class="navSecond">
            <a href="/activity/all"> <- 返回全部竞赛</a>
        </nav>

        <div id="competitionDetail" class="mainContent">
            <div class="competition mdl-js-button mdl-js-ripple-effect">
                <img class="competitionIcon" src="/img/icon_flag.png"/>
                <div class="competitionBrief">
                    <div>
                        <h2>{{$comp->title}}</h2>
                        <h3>{{$comp->begin}} ~ {{$comp->end}}</h3>
                    </div>
                </div>
                <div class="competitionPeople">
                    <h4>{{$comp->peopleHave}}@if($comp->peopleAll != -1)/{{$comp->peopleAll}}@endif</h4>
                    <h5>参与人数</h5>
                </div>
            </div>
            <div id="competitionContent">
                <p style="font-size:12px;color:black">
                   <span style="color:rgba(0,0,0,0.5);font-size:12px;">标签:</span> {{$comp->tags}}
                </p>
                <p>
                    {{$comp->content}}
                </p>


                @if($canP == 1)
                <button id="participate" onClick=participate({{$comp->id}}) class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    我要参加
                </button>
                @endif

                <h1>发起人 · 发起时间</h1>
                <div class="creatorInfo">
                    <img class="creator" src="/img/{{$comp->avatar}}.jpg"/>
                    <div>
                        <p class="name">{{$comp->nickname}}</p>
                        <p class="time">{{$comp->created_at}}</p>
                    </div>
                </div>


                <h1>参与人员</h1>
                <div class="participates">
                    @foreach($ps as $p)
                    <img class="participate" src="/img/{{$p->avatar}}.jpg"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>

<footer>

</footer>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
    window.onload = function(){

    }

    function participate(id){
        $.ajax({
            type:'post',
            url:'/activity/participate',
            dateType:'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                id:id
            },
            success:function(data){
                console.log(data);
                location.reload();
            },
            fail:function(){
                console.log("fail");
            }
        })
    }
</script>
</body>
</html>