<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--facebook start--}}

    <meta name="og:description" content="為了健康設計間單操作方式，及時彈跳視窗，告知辛苦工作的朋友們請起來走走動動"/>

    <meta property="og:title" content="健康stand up 計時器"/>

    <meta property="og:type" content="health"/>

    <meta property="og:url" content="http://standup.orgates.net"/>

    <meta property="og:image" content="http://standup.orgates.net/timer.jpg"/>

    <meta property="og:site_name" content="健康stand up 計時器"/>

    {{--facebook end--}}


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="健康計時器" />

    <link rel="shortcut icon" href="timer.ico" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap2/bootstrap-switch.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.bootcss.com/vue/2.3.4/vue.min.js"></script>
    <title>Stand up 計時器</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.switch/4.0.0-alpha.1/css/bootstrap-switch.min.css">
    <script src="https://cdn.jsdelivr.net/bootstrap.switch/4.0.0-alpha.1/js/bootstrap-switch.min.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="main-content" class="container">
    <h2>
        <img src="timer.ico" style="max-height: 120px; max-width: 120px">
        健康 Stand up 計時器 !!!
    </h2>
    <p style="color: red">請在下方輸入 stand up 時間 </p>

    <div class="make-switch switch-small">
        自動記錄：<input type="checkbox" checked="true" data-checkbox="VALUE1" class="alert-status">
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>小時</th>
            <th>分鐘</th>
            <th>秒鐘</th>
            <th>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input id="hour" type="text" v-model="hour">
                <input type="button" value="歸零"
                       class="btn btn-warning" onclick="returnZero('hour')">
            </td>
            <td><input id="minute" type="text" v-model="minute">
                <input type="button" value="歸零"
                       class="btn btn-warning" onclick="returnZero('minute')">
            </td>
            <td><input id="second" type="text" v-model="second">
                <input type="button" value="歸零"
                       class="btn btn-warning" onclick="returnZero('second')">
            </td>
            <td>
                <input type="button" value="設定" class="btn btn-primary"
                       onclick="settingLoopAlert()">
            </td>
        </tr>
        </tbody>
    </table>
    <div class="fb-like" data-href="http://standup.orgates.net/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

</div>
</body>
</html>
<script>

    var name = 'time';

    var vm = new Vue({
        el: '#main-content',
        data: {
            hour: 1,
            minute: 0,
            second: 0,
            state: false
        }
    });

    function returnZero(type) {
        if (type = 'hour') {
            vm.hour = 0;
        }
        if (type = 'minute') {
            vm.minute = 0;
        }
        if (type = 'second') {
            vm.second = 0;
        }
    }

    var notifyEnable = false;
    var timeOut;
    function loopAlert() {

        time = convertSecond(vm.hour, vm.minute, vm.second);

        if (time > 1) {

            that = this;
            if (notifyEnable) {
                notifyMe();
            }

            timeOut = setTimeout(function () {
                that.loopAlert(time)
            }, time);
        }
    }

    function settingLoopAlert() {

        clearTimeout(timeOut);

        notifyEnable = false;

        if (vm.state = true) {
            storeTime();
        }

        loopAlert();

        notifyEnable = true;
    }


    Notification.requestPermission().then(function (result) {
        console.log(result);
    });

    function notifyMe() {

        var title = "Orgates message";

        var options = {
            body: "stand up! stand up! stand up! 因為很重要所以要說三次",
            icon: "timer.ico"
        }

        // Let's check if the browser supports notifications
        if (!("Notification" in window)) {
            alert("This browser does not support system notifications");
        }

        // Let's check whether notification permissions have already been granted
        else if (Notification.permission === "granted") {
            // If it's okay let's create a notification
            var notification = new Notification(title, options);
        }

        // Otherwise, we need to ask the user for permission
        else if (Notification.permission !== 'denied') {
            Notification.requestPermission(function (permission) {
                // If the user accepts, let's create a notification
                if (permission === "granted") {
                    var notification = new Notification(title, options);
                }
            });
        }

        // Finally, if the user has denied notifications and you
        // want to be respectful there is no need to bother them any more.
    }

    function setCookie(name) {
        document.cookie = name + "=" +
                vm.hour + ":" + vm.minute + ":" + vm.second +
                ";path=/";
    }

    function getCookie(name) {
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');

        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length + 1, c.length);
            }
        }
    }

    function storeTime() {

        setCookie(name);
        var timeArray = getCookie(name).split(':');
        putVmTime(timeArray);
    }

    function putVmTime(timeArray) {
        vm.hour = timeArray[0];
        vm.minute = timeArray[1];
        vm.second = timeArray[2];
    }

    function convertSecond(hour, minute, second) {
        return hour * 60 * 60 * 1000 +
                minute * 60 * 1000 +
                second * 1000;
    }

    $(function () {
        $('.alert-status').bootstrapSwitch('state', true);

        $('.alert-status').on('switchChange.bootstrapSwitch', function (event, state) {
            vm.state = state;
        });

        var timeArray = getCookie(name).split(':');
        putVmTime(timeArray);

    });

</script>
