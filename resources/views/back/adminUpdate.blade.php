<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>竞赛管理</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script type="text/javascript" src="/material-design/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <link rel="stylesheet" href="/zebra-datepicker/public/css/zebra_datepicker.css">

</head>
<body>
<header>
    <div class="headerWrapper">
        <div id="logo_wrapper">
            SportsMan - 后台管理
        </div>
        <nav id="headerNav">
            {{--<a href="#">首页</a>--}}
            <a href="/admin">竞赛</a>
            <button id="personal"
                    class="mdl-button mdl-js-button mdl-button--icon"
                    style="margin-left:auto;">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                 for="personal">
                <a href="/admin" class="mdl-menu__item">活动管理</a>
                <a class="mdl-menu__item">登出</a>
            </div>
        </nav>
    </div>
</header>

<div class="main">


    <nav id="mainNav">
        <a class="active" href="./admin_competition.html">活动管理</a>
        <!--<a class="active" href="./personalFriends.blade.php">好友管理</a>-->
    </nav>

    <div id="personalInfo" class="mainContent">
        <h1>活动编辑</h1>
        <form>
            <div class="formItemSelf">
                <h2>竞赛名称</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="title" value="{{$comp->title}}"/>
                    <label class="mdl-textfield__label" for="userId"></label>
                </div>
            </div>
            <input type="hidden" id="compid" value="{{$comp->id}}">
            <div class="formItemSelf">
                <h2>人数上限</h2>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1"
                           @if($comp->peopleAll != -1)checked @endif >
                    <span class="mdl-radio__label">有</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="0"
                           @if($comp->peopleAll == -1)checked @endif>
                    <span class="mdl-radio__label">无</span>
                </label>
            </div>

            @if($comp->peopleAll != -1)
            <div class="formItemSelf">
                <h2>人数</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input id="peopleCount" class="mdl-textfield__input" type="text" id="peopleCount" pattern="^[1-9]\d*$"
                     value="{{$comp->peopleAll}}"/>
                    <label class="mdl-textfield__label" for="userId"></label>
                </div>
            </div>
            @endif

            <div class="formItemSelf">
                <h2>开始时间</h2>
                <div id="datePickerBegin" style="width:180px;">
                    <input type="text" id="datePick1" name="datePicker1" value="{{$comp->begin}}" />
                </div>
                <h2 style="margin-left: 50px;">结束时间</h2>
                <div id="datePickerEnd" style="width:180px;">
                    <input type="text" id="datePick2" name="datePicker2" value="{{$comp->end}}" />
                </div>
            </div>

            <div class="formItemSelf" style="height:100px;">
                <h2>描述</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "3" id="content"  value="{{$comp->content}}">{{$comp->content}}</textarea>
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
                <p style="width:400px;" id="tips"></p>
            </div>
        </form>
    </div>
</div>

<footer>

</footer>
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="/zebra-datepicker/public/js/zebra_datepicker.js"></script>
<script>
    window.onload = function() {
        console.log($('#datePick1'));
        $('#datePick1').Zebra_DatePicker({direction: 1});
        $('#datePick2').Zebra_DatePicker({direction: 1});

        $('#option-2').on('click',function(){
            $('#countWrapper').slideUp();
            $('#peopleCount').val('');
        });

        $('#option-1').on('click',function(){
            $('#countWrapper').slideDown();
            $('#peopleCount').val('');
        });


        $('#submit').on('click',function(e){
            console.log('clicked');
            e.preventDefault();
            $tip = $('#tips');

            var title =  $('#title').val();
            if(title == null || title==''){
                $tip.html('请填写标题_(:зゝ∠)_');
                return ;
            }

            var haslimit = $('input[type="radio"]:checked').val();
            var limit = haslimit == 1?$('#peopleCount').val():-1;
            console.log(haslimit == 1);
            console.log(typeof(limit));
            if(haslimit == 1 && typeof(limit) == "undefined"){
                $tip.html('请填写人数上限_(:зゝ∠)_');
                return;
            }else if(haslimit == 1 && limit == ""){
                $tip.html('请填写人数上限_(:зゝ∠)_');
                return;
            }

            if($('#countValid').hasClass('is-invalid')){
                $tip.html('人数只能是正整数_(:зゝ∠)_');
                return;
            }

            var begin = $('#datePick1').val();
            var end = $('#datePick2').val();
            if(begin ==""){
                $tip.html('请填写开始时间_(:зゝ∠)_');
                return ;
            }
            if(end ==""){
                $tip.html('请填写结束时间_(:зゝ∠)_');
                return ;
            }
            if(begin>end){
                $tip.html('开始时间不可以迟于结束时间_(:зゝ∠)_');
                return ;
            }

            var content =  $('#content').val();
            if(content==null || content==''){
                $tip.html('请填写描述_(:зゝ∠)_');
                return ;
            }

            $.ajax({
                type:'post',
                url:'/admin/update',
                dateType:'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    title:title,
                    content:content,
                    peopleAll:limit,
                    begin:begin,
                    end:end,
                    id:$('#compid').val(),
                },
                success:function(data){
                    console.log(data);
                    location.reload();
                },
                fail:function(){
                    location.reload();
                }
            })
        })
    }
</script>
</body>
</html>