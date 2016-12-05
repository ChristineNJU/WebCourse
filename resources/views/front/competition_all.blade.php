<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>所有竞赛</title>
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
            <img id="userIcon" src="../img/icon1.jpg"/>
            <h2>Christine张</h2>
            <ul id="momentInfo">
                <li>
                    <p class="momentInfoNum">{{$count}}</p>
                    <p class="momentInfoName">参与竞赛</p>
                </li>

            </ul>
        </div>
        <nav id="mainNav">
            <a href="/activity/new">
                新建竞赛
            </a>
        </nav>
    </div>

    <div>
        <nav class="navSecond">
            <a href="/activity/all">所有竞赛</a>
            <a href="/activity/self">我发起的</a>
        </nav>
        <div>
            @foreach($comps as $comp)
            <a href="activity/detail/{{$comp->id}}">
                <div class="competition mainContent mdl-js-button mdl-js-ripple-effect">
                    {{--<img class="competitionIcon"--}}
                         {{--src="@if($comp->peopleAll != -1)/img/icon_flag.png @else /img/icon_pk.png @endif"/>--}}

                    <div class="competitionIconW @if($comp->peopleAll != -1)icon_flag @else icon_pk @endif">

                    </div>
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
            </a>
            @endforeach
        </div>
    </div>
</div>

<footer>

</footer>
</body>
</html>