<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/13
 * Time: 17:07
 */

namespace App\Controller;


class User extends \Swoole\Controller {

    function login() {
        $this->display('user/login_tpl.php');
    }

    function login_ajax() {

        $user_name = $this->request->post['name'];
        $password = $this->request->post['password'];

        if (!$user_name) {
            echo $this->message(100, '用户名不能为空');
            die;
        }

        $this->session->start();
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = md5($user_name);

        $result = [
            'time' => time()

        ];

        echo $this->json($result);
    }
}