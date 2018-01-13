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

        $result = [
            'time' => time()

        ];

        echo $this->json($result);
    }
}