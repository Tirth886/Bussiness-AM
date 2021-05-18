<?php

namespace Auth;

use App\Model\UserModel;

class Auth
{
    public static function isLogin()
    {
        if (isset($_SESSION['authUsers'])) {
            if (is_array($_SESSION['authUsers'])) {
                if (isset($_SESSION['authUsers']['id'])) {
                    return true;
                }
            }
        }
        return false;
    }
    public static function create(array $data)
    {
        $_SESSION['authUsers'] = [];
        foreach ($data as $key => $value) {
            $_SESSION['authUsers'][$key] = $value;
        }
        return true;
    }

    public static function get(string $key){
        return $_SESSION['authUsers'][$key];
    }

    public static function  attempt(array $data)
    {
        $user = new UserModel;
        $response = $user->select($data)->execute()->single();
        if (is_object($response)) {
           return static::create((array) $response);
        } else {
            return false;
        }
    }
}
