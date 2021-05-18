<?php

use App\Model\FileUpload;

if (_post('fileUpload')) {
    _unset('fileUpload');
    $fileupload = new FileUpload('image');
    $response = $fileupload->validate()->load();
    if (is_array($response)) {
        echo json_encode($response);
    }
}


