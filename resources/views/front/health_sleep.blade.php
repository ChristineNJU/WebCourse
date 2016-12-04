<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>睡眠情况</title>

    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">--}}
    <link rel="stylesheet" href="/zebra-datepicker/public/css/zebra_datepicker.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/chartJS/Chart.js"></script>
    <script type="text/javascript" src="/zebra-datepicker/public/js/zebra_datepicker.js"></script>
</head>
<body>
<header>
    <div class="headerWrapper">
        <div id="logo_wrapper">
            SportsMan
        </div>
        <nav id="headerNav">
            <a href="#">首页</a>
            <a href="/activity">竞赛</a>
            <a class="active" href="/health">健康</a>
            <a class="" href="/moments">好友圈</a>
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
    <nav id="mainNav">
        <a href="/health">健康总览</a>
        <a href="/health/sports">运动情况</a>
        <a class="active" href="/health/sleep">睡眠分析</a>
    </nav>
    <div class="mainContent">
        <h1>睡眠情况</h1>
        <p style="position:absolute;right:210px;top: 20px;font-size: 12px;" id="noDataTip"></p>
        <div id="datePicker">
            <input type="text" id="datePick" name="datePicker"  />
        </div>
        <ul id="sleepStatics">
            <li>
                <p class="sportsNum">
                    <span id="rate"></span>
                </p>
                <p class="sportsTitle">
                   睡眠有效率
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span id="begin"></span>
                </p>
                <p class="sportsTitle">
                    睡眠开始
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span id="end"></span>
                </p>
                <p class="sportsTitle">
                    睡眠结束
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span id="total"></span>
                </p>
                <p class="sportsTitle">
                    睡眠总时长
                </p>
            </li>
            <li>
                <p class="sleepNum">
                    <span id="valid"></span>
                </p>
                <p class="sportsTitle">
                    有效睡眠时间
                </p>
            </li>
        </ul>

        <h1>睡眠曲线</h1>
        <div class="">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
    </div>
    </div>
</div>

<footer>

</footer>

<script>
    var chartData = {
        labels: ["23:50", "00:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", "7:00"],
        datasets: [
            {
                label: "睡眠情况",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "#96a04d",
                borderColor: "#96a04d",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "#96a04d",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "#96a04d",
                pointHoverBorderColor: "#96a04d",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [],
                spanGaps: false,
            }
        ]
    }

    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
        backgroundColor:'white',
    };

    window.onload = function() {

        //init datepicker
        $('#datePick').Zebra_DatePicker({direction: -1});
        var today = new Date();
        var month = today.getMonth()+1;
        $('#datePick').val(today.getFullYear()+'-'+month+'-'+today.getDate());

        $('.Zebra_DatePicker').on('click',function(e){
            var picked = (new Date($('.dp_caption').html()+" "+e.target.innerText));
            if(picked != 'Invalid Date'){
//                console.log(picked);
                var pickedM = picked.getMonth()+1;
                pickedM = pickedM < 10 ? '0'+ pickedM : pickedM;
                var pickedD = picked.getDate();
                if( pickedD < 10){
                    pickedD = '0'+pickedD;
                }
                var date = picked.getFullYear()+'-'+pickedM+'-'+pickedD;
//                console.log(picked.getFullYear()+'-'+pickedM+'-'+pickedD);
            }
        });

        var picked = (new Date());
        if(picked != 'Invalid Date'){
            var pickedM = picked.getMonth()+1;
            pickedM = pickedM < 10 ? '0'+ pickedM : pickedM;
            var pickedD = picked.getDate();
            if( pickedD < 10){
                pickedD = '0'+pickedD;
            }
            var date = picked.getFullYear()+'-'+pickedM+'-'+pickedD;
            update(date);
        }

        //init chart
        var ctx = document.getElementById("myChart").getContext("2d");
        var chartDisplay = new Chart(ctx, {
            type: "line",
            data: chartData,
            options:options,
        });
    }

    functon update(date){
        $.ajax({
            type:'get',
            url:'/health/sleep/'+date,
            success:function(data){
                console.log(data);
                if(data.data == null){
                    $('#noDataTip').html('没有这一天的数据呢，换一天试试看吧_(:зゝ∠)_');
                    return;
                }else{
                    $('#noDataTip').html("哎呦，找到了\\\(●'◡'●\\\)");
                }
                var data1 = data.data;
                $('#rate').html((data1.rate*100+'').substr(0,2)+'%');
                $('#begin').text(data1.begin);
                $('#end').text(data1.end);
                $('#total').text(data1.timeTotal);
                $('#valid').text(data1.timeValid);
                var cd = data1.values.split(':');
                var newChartData = {
                    labels: [data1.begin, "00:00", "1:00", "2:00", "3:00", "4:00", "5:00", "6:00", data1.end],
                    datasets: [
                        {
                            label: "睡眠情况",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "#96a04d",
                            borderColor: "#96a04d",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "#96a04d",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "#96a04d",
                            pointHoverBorderColor: "#96a04d",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: cd,
                            spanGaps: false,
                        }
                    ]
                }

                var ctx = document.getElementById("myChart").getContext("2d");
                var chartDisplay = new Chart(ctx, {
                    type: "line",
                    data: newChartData,
                    options:options,
                });
            }
        });
    }
</script>
</body>
</html>