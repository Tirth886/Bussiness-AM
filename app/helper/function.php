<?php

function base_url(): string
{
    return WEBSITE_URL;
}

/**
 * @param string $type app | view | widget
 * 
 */
function _path(String $type = ""): string
{
    switch ($type) {
        case "app":
            return APP_PATH;
        case "view":
            return VIEWS;
        case "widget":
            return WIDGET;
        case "upload_url":
            return base_url() . UPLOAD_PATH_URL;
        default:
            return UPLOAD_PATH;
    }
}

function _query(String $key)
{
    return @$_GET[$key] ?? "";
}

function _redirectTo(string $page = "")
{
    if ($page == "") {
        return base_url();
    }
    return base_url() . '?ref=' . $page;
}

function _redirect(string $page = "")
{
    $to = "";
    if ($page == "") {
        $to = base_url();
    } else {
        $to = base_url() . '?ref=' . $page;
    }

    echo "
        <script>
            window.location.href = '{$to}'
        </script>
    ";
}

function _post(string $key)
{
    return $_POST[$key] ?? "";
}
function _file(string $key)
{
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
    }

    throw new Exception("File Index Not Found : {$key}", 1);
}

function _unset(string $key)
{
    if (isset($_POST[$key])) {
        unset($_POST[$key]);
    }
    if (isset($_GET[$key])) {
        unset($_GET[$key]);
    }
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
    return;
}

function _createdAt()
{
    return date("Y-m-d H:i:s", time());
}

function _timestamp()
{
    return (string) strtotime(_createdAt());
}
