<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/bussiness/";

$upload_path = __DIR__ . '/public/images/myimages/';
$upload_path_url = 'public/images/myimages/';
$app_path = __DIR__ . '/app/';
$view_path = __DIR__ . '/include/';
$widget_path = __DIR__ . '/include/widget/';

define('WEBSITE_URL', $actual_link);
define('UPLOAD_PATH', $upload_path);
define('UPLOAD_PATH_URL', $upload_path_url);
define('APP_PATH', $app_path);
define('VIEWS', $view_path);
define('WIDGET', $widget_path);

require_once './app/helper/DotEnv.php';

use App\Helper\Enviroment as DotEnv;

$dotenv = new DotEnv(__DIR__ . '/.env');
$dotenv->load();

require_once APP_PATH . 'db/db.php';

require_once APP_PATH . 'helper/function.php';
require_once APP_PATH . 'helper/helper.php';

$APP_ROOT = [
    APP_PATH . 'model/',
    APP_PATH . 'controller/'
];
foreach ($APP_ROOT as $mod_controll) {
    foreach (scandir($mod_controll) as $mod) {
        if (!in_array($mod, [".", ".."])) {
            require_once $mod_controll . $mod;
        }
    }
}
