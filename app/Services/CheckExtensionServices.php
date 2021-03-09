<?php

namespace App\Services;

class CheckExtensionServices
{
    public static function checkExtension($fileData, $extension){
        $extension = mb_strtolower($extension);

        if ($extension === 'jpg'){
            $data_url = 'data:image/jpg;base64,'.base64_encode($fileData);
        }
        if ($extension === 'jpeg'){
            $data_url = 'data:image/jpg;base64,'.base64_encode($fileData);
        }
        if ($extension === 'png'){
            $data_url = 'data:image/png;base64,'.base64_encode($fileData);
        }
        if ($extension === 'gif'){
            $data_url = 'data:image/gif;base64,'.base64_encode($fileData);
        }

        return $data_url;
    }
}
