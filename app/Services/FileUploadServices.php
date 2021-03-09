<?php

namespace App\Services;

class FileUploadServices
{
    public static function fileUpload($imageFile){
        $fileNameWithExt = $imageFile->getClientOriginalName();

        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        $extension = $imageFile->getClientOriginalExtension();

        $fileNameToStore = $fileName.'_'.time().'.'.$extension;

        $fileData = file_get_contents($imageFile->getRealPath());

        $list = [$extension, $fileNameToStore, $fileData];

        return $list;
    }
}
