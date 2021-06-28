<?php

namespace App\Helper;

use Folklore\Image\Facades\Image;
use Illuminate\Support\Facades\Config;

class ImageHelper
{
    public static function imageTask($file, $dir)
    {
        //paths
        $destinationPath = base_path() . DIRECTORY_SEPARATOR .'public'. DIRECTORY_SEPARATOR .'uploaded'. DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR;
        $thumbPath = $destinationPath . 'thumb' . DIRECTORY_SEPARATOR;
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        if (!is_dir($thumbPath)) {
            mkdir($thumbPath, 0755, true);
        }
        $destinationUrl = url('/') . '/uploaded/' . $dir . '/';
        $thumbUrl = $destinationUrl . '/';

        //property
        $fileOrigName = $file->getClientOriginalName();

        $fileUniqueName = date("YmdHis") . "_" . str_random(25) . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $fileUniqueName);

        Image::make($destinationPath . $fileUniqueName, array(
            'width' => 200,
            'height' => 200
        ))->save($thumbPath . $fileUniqueName);

        $result = [
            'destinationUrl' => $destinationUrl,
            'thumbUrl' => $thumbUrl,
            'origName' => $fileOrigName,
            'uniqueName' => $fileUniqueName
        ];

        $result = json_encode($result);
        return $result;
    }

    public function showThumb($photo){
        //dd($photo);
        $thumb = null;
        if($photo != null || $photo != ""){
            $photo = json_decode($photo);
            $thumb = $photo->thumbUrl . $photo->uniqueName;
            return $thumb;
        } else {
            return "";
        }

    }

    public function showPhoto($photo){
        $mainImage = null;
        if($photo != null || $photo != ""){
            $photo = json_decode($photo);
            $mainImage = $photo->destinationUrl . $photo->uniqueName;
        }
        return $mainImage;
    }
}
