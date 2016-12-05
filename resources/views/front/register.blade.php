<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SportsMan 注册</title>
    <meta name="keywords" content="运动,社交,南京大学,软件学院,面向WEB的计算,大作业">

    <script type="text/javascript" src="/material-design/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/material-design/material.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">

</head>
<body>
<div id="signIn_bg">
    <div id="signIn"  style="height:450px;">
        <h1>注册</h1>
        <form  role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" id="name" type="text" name="name" value="{{ old('name') }}">
                <label class="mdl-textfield__label" for="username">用户名</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" id="email" type="email" name="email" value="{{ old('email') }}">
                <label class="mdl-textfield__label" for="password">邮箱</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" id="password" type="password" name="password">
                <label class="mdl-textfield__label" for="password">密码</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input"  id="password-confirm" type="password" name="password_confirmation">
                <label class="mdl-textfield__label" for="password">确认密码</label>
            </div>

            <div style="padding-top:15px;padding-bottom:15px;display:flex;flex-direction:row;justify-content: space-around">
                <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="width:140px;height:35px;">取消</button>
                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="width:140px;height:35px;background-color: #c5cd8e">确定</button>
            </div>


            <a href="/login" id="login" style="margin-top:0;width:280px;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                ←登录
            </a>


        </form>

    </div>
</div>
</body>
</html>