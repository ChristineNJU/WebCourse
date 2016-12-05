<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>竞赛管理</title>
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
            SportsMan - 后台管理
        </div>
        <nav id="headerNav">
            <a href="#">首页</a>
            <a href="/admin">竞赛</a>
            <button id="personal"
                    class="mdl-button mdl-js-button mdl-button--icon"
                    style="margin-left:auto;">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                 for="personal">
                <a href="/admin" class="mdl-menu__item">活动管理</a>
                <a href="/logout" class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">


    <nav id="mainNav">
        <a class="active" href="./admin_competition.html">活动管理</a>
        <!--<a class="active" href="./personalFriends.blade.php">好友管理</a>-->
    </nav>

    <div id="competitionManage" class="mainContent">
        <h1>活动管理</h1>

        <table>
            <tr>
                <th>竞赛名称</th>
                <th>发起人id</th>
                <th>发起时间</th>
                <th>操作</th>
            </tr>

            @foreach($comps as $comp)
            <tr class="tableRow">
                <td>{{$comp->title}}</td>
                <td>{{$comp->authorid}}</td>
                <td>{{$comp->created_at}}</td>
                <td>
                    {{--<button class="mdl-button mdl-js-button mdl-js-ripple-effect">--}}
                        <i style="cursor:pointer;" onClick=deleteA({{$comp->id}}) class="material-icons">delete</i>
                       <a href="/admin/edit/{{$comp->id}}">
                           <i style="cursor:pointer;color:black" class="material-icons">edit</i>
                       </a>
                    {{--</button>--}}

                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>

<footer>

</footer>
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script>
    function deleteA(id){
        console.log('delete'+id);

        $.ajax({
            type:'post',
            url:'admin/delete',
            dataType:'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                id:id,
            },
            success:function(){
                location.reload();
            },
            fail:function(){
                location.reload();
            }
        })
    }
</script>
</body>
</html>