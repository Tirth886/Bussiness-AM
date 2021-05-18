<?php

namespace App\Controller;

use App\Model\UserModel;
use Helper;

use Auth\Auth;

class UserController extends UserModel
{
    use Helper;

    public function Auth()
    {
        if (isset($_POST['login'])) {
            unset($_POST['login']);
            $data = [
                "phone" => @$_POST['phone'],
                "password" => md5(@$_POST['password']),
            ];
            if (Auth::attempt($data)) {
                $url = base_url();
                header("location: {$url}");
            } else {
            }
        }
    }
}
