<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新建竞赛</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    {{--<script type="text/javascript" src="/material-design/jquery-2.2.3.js"></script>--}}
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" href="/zebra-datepicker/public/css/zebra_datepicker.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">

    {{--<script src="http://code.jquery.com/jquery-latest.js"></script>--}}


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


    <div id="personalInfo" class="mainContent">
        <h1>新建竞赛</h1>
        <form>
            <div class="formItemSelf">
                <h2>竞赛名称</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="title" />
                    <label class="mdl-textfield__label" for="title"></label>
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

            <div id="countWrapper" class="formItemSelf">
                <h2>人数</h2>
                <div id="countValid" class="mdl-textfield mdl-js-textfield">
                    <input id="peopleCount" class="mdl-textfield__input" type="text" id="peopleCount" pattern="^[1-9]\d*$"/>
                    <label class="mdl-textfield__label" for="userId"></label>
                </div>
            </div>

            <div class="formItemSelf">
                <h2>开始时间</h2>
                <div id="datePickerBegin" style="width:180px;">
                    <input type="text" id="datePick1" name="datePicker1"  />
                </div>
                <h2 style="margin-left: 50px;">结束时间</h2>
                <div id="datePickerEnd" style="width:180px;">
                    <input type="text" id="datePick2" name="datePicker2"  />
                </div>
            </div>

            <div class="formItemSelf" style="height:100px;">
                <h2>描述</h2>
                <div class="mdl-textfield mdl-js-textfield">
                    <textarea class="mdl-textfield__input" type="text" rows= "3" id="content" ></textarea>
                    <label class="mdl-textfield__label" for="content">竞赛详情描述</label>
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
                url:'/activity/create',
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