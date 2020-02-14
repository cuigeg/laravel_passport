<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://g.alicdn.com/dingding/dingtalk-jsapi/2.7.13/dingtalk.open.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                </div>
            </div>
        </div>
    </body>
<script>
    window.onload = function () {
        console.log(11111)
        console.log(window.href)
        $.ajax({
            type: "get",
            url: "/api/logs/add?type=直接获取免登授权码&data=" + window.location.search,
            success(res) {
                alert('请求成功！')
            }
        })
        dd.ready(function() {
            dd.runtime.permission.requestAuthCode({
                corpId: _config.corpId, // 企业id
                onSuccess: function (info) {
                    code = info.code // 通过该免登授权码可以获取用户身份
                    $.ajax({
                        type: "get",
                        url: "/api/logs/add?type=钉钉jsapi获取免登授权码&code=" + code,
                        success(res) {
                            alert('请求成功！')
                        }
                    })
                }});
        });
    }
</script>
</html>
