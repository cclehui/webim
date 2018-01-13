<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Swoole网页即时聊天</title>
    <script src="/static/js/jquery.js"></script>
    <script typet="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

    <form action="" id="login_form">
        <table>
            <tr>
                <td>用户名称:</td>
                <td><input type="text" name="name" value="" /></td>
            </tr>

            <tr>
                <td>密码:</td>
                <td><input type="text" name="password" value="" /></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="button" name="" value="登录" onclick="login()"></td>
            </tr>


        </table>

    </form>

<script type="text/javascript">
    $("document").ready(function () {
        alert(1111);
    });

    function login() {

        data = $("#login_form").serialize();

        url = "/user/login_ajax";

        $.ajax({
            "url":url,
            "type":"POST",
            "data":data,
            "success":function (response) {
                alert(response)
            }

        });
    }

</script>

</body>

</html>
