<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SportsMan 登录</title>
    <meta name="keywords" content="运动,社交,南京大学,软件学院,面向WEB的计算,大作业">

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">

</head>
<body>
<div id="signIn_bg">
    <div id="signIn">
        <h1>登录</h1>
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="email" id="email" name="email" value="{{ old('email') }}">
                <label class="mdl-textfield__label" for="username">用户名</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" id="password" name="password">
                <label class="mdl-textfield__label" for="password">密码</label>
            </div>

            <!-- Accent-colored raised button with ripple -->
            <div style="padding-top:15px;padding-bottom:15px;display:flex;flex-direction:row;justify-content: space-around">
                <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="width:140px;height:35px;">取消</button>
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="width:140px;height:35px;background-color:#fad957 ">确定</button>
            </div>

            <a href="/register" style="width:280px;" id="signup" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                注册→
            </a>

        </form>

    </div>
</div>
</body>
</html>