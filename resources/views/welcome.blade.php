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

    <meta name="og:description" content="為了健康設計簡單操作方式，即時彈跳視窗，
    通知辛苦工作的朋友們請起來走走動動"/>

    <meta property="og:title" content="健康stand up 計時器"/>

    <meta property="og:type" content="health"/>

    <meta property="og:url" content="http://standup.orgates.net"/>

    <meta property="og:image" content="http://standup.orgates.net/timer.jpg"/>

    <meta property="og:site_name" content="健康stand up 計時器"/>

    {{--facebook end--}}


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="健康計時器"/>
    <meta name="description" content="為了健康設計簡單操作方式，即時即時彈跳視窗，
    通知辛苦工作的朋友們請起來走走動動"/>


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
        <p style="font-size: 17px">我們都知道坐著太久不只變胖其實對健康也不好，
            過去也已經有不少醫學專家用分析或案例告訴我們坐太久的壞處，
            但一想到都工作了一天還要運動就只 覺得累，
            結果就是，我們把複雜的致病因素或是難懂的病名拋到腦後，繼續窩上沙發看電視。
        </p>
        &nbsp

        <div class="col-md-5">
            <p>
                <img hight="584" width="700"
                        src="https://fpscdn.yam.com/MjU0NDA3ODd3b3JsZA==/e8d53a8c8b7c4587.jpg" alt="一張圖讓你看清久坐不動的危機">
            </p>

        </div>
    </div>


    <div class="col-md-12">
        <h5>危機一、<a href="https://go-sport.tw/tag/%e4%b9%85%e5%9d%90/" title="View all posts in 久坐" target="_blank">久坐</a>傷害你的內臟器官</h5>
        <p><strong>心臟疾病</strong><br />
            長時間坐著會讓肌肉燃燒脂肪的能量變少，並讓血流速度變遲緩，這也讓脂肪酸更容易堆積在心臟。長時間坐姿與高血壓還有高膽固醇有關，再看到心血管疾病的機率上，平常靜態、幾乎沒有甚麼運動的人比偶爾會動一下的人的罹病機率高出了2倍。</p>
        <p><strong>胰臟過度活動</strong><br />
            胰臟產生胰島素，胰島素是一種攜帶葡萄糖給細胞的賀爾蒙，目的是要讓細胞有能量可用。但細胞處在沒有動作的肌肉時，對胰島素沒有辦法立刻反應，因此胰臟會產生愈來愈多的胰島素，這可能導致糖尿病及其它疾病。一份2011年的研究中就發現，人們只要有一天是長時間的<a href="https://go-sport.tw/tag/%e4%b9%85%e5%9d%90/" title="View all posts in 久坐" target="_blank">久坐</a>，體內對胰島素的反應就下降了。</p>
        <p>編註：根據《<a href="http://www.tma.tw/magazine/ShowRepID.asp?rep_id=2354" target="_blank">台灣醫界雜誌</a>》，胰島素分泌過多，會造成血液脂肪代謝異常，如三酸甘油脂過高、低密度膽固醇過高、高密度膽固醇太少、血液凝固異常、血管硬化 (即血管阻抗性增加)、類固醇激素濃度改變、週邊血液循環不良與體重增加。</p>
        <p><strong>大腸癌</strong><br />
            已經有研究發現，久坐會增加大腸癌、乳癌和子宮內膜癌的風險，儘管確切原因尚不清楚，但一個理論就提到是「過多的胰島素促使細胞生長」，另一項說法則是規律運動能增強天然的抗氧化劑，進一步殺死與致癌相關的「自由基」。</p>
        <p>&nbsp;</p>
        <h5>危機二、久坐讓你的肌肉退化</h5>
        <p><strong>軟綿綿的腹部</strong><br />
            當你站著、走動或是直挺的坐著時，腹部的肌肉群能讓你保持身體挺直。但當你癱軟在椅子上時，這些腹部肌肉就不被使用了，結果就是，緊繃的<a href="https://go-sport.tw/tag/%e8%83%8c/" title="View all posts in 背" target="_blank">背</a>肌和虛軟的腹部讓不良的姿勢更嚴重，脊椎原本的彎曲弧度被放大，這就是所謂的「<a href="https://go-sport.tw/tag/%e8%85%b0/" title="View all posts in 腰" target="_blank">腰</a>椎過度前凸」(hyperlordosis)或「凹背」(swayback)。</p>
        <p><strong>緊繃的髖關節</strong><br />
            活動自如的髖關節可以幫你保持身體平衡，但長期久坐的人很少伸展髖關節前側的髖屈肌群(hip flexor muscles)，這使得這一帶的肌群變得緊繃，進一步也讓人的活動範圍受限，同時更讓步伐縮短。有研究就發現，髖關節活動量的減少是老人發生跌倒的主要原因。</p>
        <p><strong>無力的臀大肌</strong><br />
            當你坐著的時候，你的臀部肌肉基本上什麼事情都不用做，漸漸地這一帶的肌肉也就習慣了。軟趴趴的臀大肌會影響你身體的平衡和穩定，一旦缺乏這樣的穩定力你就無法邁出大而有力的步伐。</p>
        <p>&nbsp;</p>
        <h5>危機三、久坐讓腿部毛病多</h5>
        <p><strong>腿部循環差</strong><br />
            當你坐了很長一段時間後，就會讓血液循環速度減緩，這進一步會讓液體蓄積在腿部，有不少問題就是從此產生：範圍從腳踝腫脹、靜脈曲張到危險的血塊症況「深靜脈血栓(Deep Vein Thrombosis,DVT)，種種病症都與血液循環差有關。</p>
        <p><strong>脆弱的骨頭</strong><br />
            平常你會做到的負重活動像是走路和跑步等，都能刺激髖關節和下半身的骨頭長得更厚、也更結實強壯，許多科學家就把漸漸增多的骨質疏鬆症的成因歸在缺乏運動上。</p>
        <p>&nbsp;</p>
        <h5>危機四、久坐讓上半身變僵硬</h5>
        <p><strong>思緒不清</strong><br />
            正在動作中的肌肉可以讓新鮮的血液和氧氣進入到大腦中，同時讓各種血液和情緒相關的化學物質釋放出來。當你長時間處在靜態的狀態時，任何事情包含你的大腦運作速度都減緩了。</p>
        <p><strong>頸部僵硬</strong><br />
            如果你大部分的時間都是坐在辦公桌前工作，然後用<a href="https://go-sport.tw/tag/%e8%84%96%e5%ad%90/" title="View all posts in 脖子" target="_blank">脖子</a>前傾的姿勢一直盯螢幕，或是一邊夾著話筒邊打字，這些都會造成你頸椎緊繃，更進一步導致身體永久性的失去平衡。</p>
        <p><strong>肩背痠痛</strong><br />
            往前傾、或是弓著背久坐的時候，你的脖子不會是唯一往前傾的部位，當你這麼坐的時候，也會讓<a href="https://go-sport.tw/tag/%e8%82%a9%e8%86%80/" title="View all posts in 肩膀" target="_blank">肩膀</a>還有背部的肌肉過度拉長，尤其是連接脖子和<a href="https://go-sport.tw/tag/%e8%82%a9%e8%86%80/" title="View all posts in 肩膀" target="_blank">肩膀</a>的「斜方肌」(trapezius)特別會受到影響。</p>
        <p>&nbsp;</p>
        <h5>危機五、久坐破壞你的背</h5>
        <p><strong>失去彈性的脊椎</strong><br />
            脊椎在缺乏活動下，就會變得僵化沒有活動力，也因此會變得很容易因人為活動受傷，例如你想要伸手拿杯咖啡，或是想要彎<a href="https://go-sport.tw/tag/%e8%85%b0/" title="View all posts in 腰" target="_blank">腰</a>綁鞋帶時，就可能出現傷到脊椎的狀況。</p>
        <p>通常我們在四處走動的時候，椎間盤會像海綿一樣，它們會伸展和收縮，藉此吸收更多的血液和營養素。但當你久坐時，椎間盤受到不均衡的擠壓會變得失去彈性，這也讓保護肌腱和韌帶附近的膠原蛋白變硬。</p>
        <p><strong>受傷害的椎間盤</strong><br />
            人們一旦久坐，就會增加椎間盤突出的風險，因為人體有一條通過腹腔的「腰大肌」(psoas)，這條肌肉拉緊時，會讓腰椎上半部前傾，這會使原本應該自然隨著脊椎曲線分布的上半身重量，全壓在坐骨(ischeal tuberosity)上。</p>
        <p>&nbsp;</p>
        <p><img class="alignnone size-full wp-image-3702" src="http://go-sport.tw/wp-content/uploads/2015/10/螢幕快照-2015-10-19-上午10.06.36.png" alt="螢幕快照 2015-10-19 上午10.06.36" width="700" height="406" /></p>
        <p>&nbsp;</p>

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
