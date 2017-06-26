<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    {{--google adwords--}}
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6288259574765696",
            enable_page_level_ads: true
        });
    </script>
    {{--google close adwords--}}


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--facebook start--}}

    <meta name="og:description" content="為了健康設計間單操作方式，及時彈跳視窗，
    告知辛苦工作的朋友們請起來走走動動"/>

    <meta property="og:title" content="健康stand up 計時器"/>

    <meta property="og:type" content="health"/>

    <meta property="og:url" content="http://standup.orgates.net"/>

    <meta property="og:image" content="http://standup.orgates.net/timer.jpg"/>

    <meta property="og:site_name" content="健康stand up 計時器"/>

    {{--facebook end--}}


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="健康計時器"/>
    <meta name="description" content="為了健康設計間單操作方式，及時彈跳視窗，
    告知辛苦工作的朋友們請起來走走動動"/>


    <link rel="shortcut icon" href="timer.ico"/>

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.switch/4.0.0-alpha.1/css/bootstrap-switch.min.css">
    <script src="https://cdn.jsdelivr.net/bootstrap.switch/4.0.0-alpha.1/js/bootstrap-switch.min.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="main-content" class="container">

    <div class="col-md-12">
        <div class="col-md-offset-3">
            <h2>
                <span id="alert-msg" style="align-content: center;color:red">
                    @{{alertMsg}}
                </span>
            </h2>
        </div>
    </div>

    <div class="col-md-12">
        <h1>
            <img src="timer.ico" style="max-height: 120px; max-width: 120px">
            健康 Stand up 計時器 !!!
        </h1>
        <p style="color: red">請在下方輸入 stand up 時間 </p>
        <div class="make-switch switch-small">
            自動記錄：<input type="checkbox" checked="true" data-checkbox="VALUE1" class="alert-status">
        </div>
    </div>

    <div class="col-md-12">
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
                           class="btn btn-warning" @click="returnZero('hour')">
                </td>
                <td><input id="minute" type="text" v-model="minute">
                    <input type="button" value="歸零"
                           class="btn btn-warning" @click="returnZero('minute')">
                </td>
                <td><input id="second" type="text" v-model="second">
                    <input type="button" value="歸零"
                           class="btn btn-warning" @click="returnZero('second')">
                </td>
                <td>
                    <input type="button" value="設定" class="btn btn-primary"
                    @click="setLoopAlert()">
                </td>

            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-12">
        <div class="fb-like" data-href="http://standup.orgates.net/" data-layout="standard" data-action="like"
             data-size="small" data-show-faces="true" data-share="true"></div>
    </div>


    <div class="col-md-12">
        <h3>一張圖讓你看清久坐不動的危機</h3>
        <img src="https://fpscdn.yam.com/MjU0NDA3ODd3b3JsZA==/e8d53a8c8b7c4587.jpg" alt="">
    </div>

    <div class="col-md-12">

        <h2>resource
            <a href="http://apps.washingtonpost.com/g/page/national/the-health-hazards-of-sitting/750/">
                Washington Post
            </a>
        </h2>

        <div class="col-md-5">
            <ul class="list-group" style="margin-top:40px">
                <li class="list-group-item active"><h4>正確的坐姿</h4></li>
                <li class="list-group-item">不向前傾斜</li>
                <li class="list-group-item">肩寬鬆弛</li>
                <li class="list-group-item">靠近側面的胳膊</li>
                <li class="list-group-item">背部被支撐</li>
                <li class="list-group-item">腳平放在地上</li>
            </ul>
        </div>



    </div>

</div>
</body>
</html>
<script>

    var vm = new Vue({
        el: '#main-content',
        data: {
            drop: 'ttt',
            hour: 1,
            minute: 0,
            second: 0,
            state: false,
            timeOut: null,
            notifyEnable: false,
            cookieName: 'timercookie',
            notifyTitle: '工作要緊身體也要顧，起來走走動動吧',
            notification: null,
            alertMsg: '',
        },
        methods: {
            notifyMe: function () {

                var title = this.notifyTitle;

                var options = {
                    body: "stand up! stand up! stand up!",
                    icon: "timer.ico"
                }

                // Let's check if the browser supports notifications
                if (!("Notification" in window)) {
                    alert("This browser does not support system notifications");
                }

                // Let's check whether notification permissions have already been granted
                else if (Notification.permission === "granted") {
                    // If it's okay let's create a notification
                    this.notification = new Notification(title, options);
                }

                // Otherwise, we need to ask the user for permission
                else if (Notification.permission !== 'denied') {
                    Notification.requestPermission(function (permission) {
                        // If the user accepts, let's create a notification
                        if (permission === "granted") {
                            this.notification = new Notification(title, options);
                        }
                    });
                }

                this.notification.onclick = function (event) {
                    event.preventDefault(); // prevent the browser from focusing the Notification's tab
                    location.reload()
                }

                this.notification.onclose = function (event) {
                    event.preventDefault(); // prevent the browser from focusing the Notification's tab
                    location.reload()
                }

            },
            returnZero: function (type) {

                if (type == 'hour') {
                    vm.hour = 0;
                }
                if (type == 'minute') {
                    vm.minute = 0;
                }
                if (type == 'second') {
                    vm.second = 0;
                }
            },
            setLoopAlert: function () {

                clearTimeout(this.timeOut);

                this.notifyEnable = false;

                if (this.state = true) {
                    this.storeTime();
                }

                this.shortShowMsg();
                this.loopAlert();

                this.notifyEnable = true;
            },
            loopAlert: function () {

                time = this.getSecond() * 1000;

                if (time > 1) {

                    that = this;
                    if (this.notifyEnable) {
                        this.notifyMe();
                    }

                    this.timeOut = setTimeout(function () {
                        that.loopAlert(time)
                    }, time);
                }
            },
            getSecond: function () {
                return parseInt(this.hour * 60 * 60 +
                        this.minute * 60 +
                        this.second);
            },
            storeTime: function () {
                name = this.cookieName;
                this.setCookie(name);
                var timeArray = this.getCookie(name).split(':');
                this.putVmTime(timeArray);
            },
            putVmTime: function (timeArray) {
                vm.hour = parseInt(timeArray[0]);
                vm.minute = parseInt(timeArray[1]);
                vm.second = parseInt(timeArray[2]);
            },
            setCookie: function (name) {
                document.cookie = name + "=" +
                        parseInt(vm.hour) + ":" +
                        parseInt(vm.minute) + ":" +
                        parseInt(vm.second) +
                        ";path=/";
            },
            getCookie: function (name) {
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
            },
            init: function () {
                var timeArray = this.getCookie(this.cookieName).split(':');
                this.putVmTime(timeArray);
                this.setLoopAlert();
                this.alertMsg = '開始啟動每' + this.getSecond() + '秒數後起來走動走動！！';
            },
            shortShowMsg: function () {

                this.alertMsg = '開始啟動每' + this.getSecond() + '秒數後起來走動走動！！';
                $('#alert-msg').fadeIn(1);
                this.fadeOutMsg();
            },
            fadeOutMsg: function () {
                $('#alert-msg').fadeOut(5000);
            }
        }
    });

    $(function () {
        $('.alert-status').bootstrapSwitch('state', true);

        $('.alert-status').on('switchChange.bootstrapSwitch', function (event, state) {
            vm.state = state;
        });

        vm.init();
        vm.fadeOutMsg();
    });

</script>
