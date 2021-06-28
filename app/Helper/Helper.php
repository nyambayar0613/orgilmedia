<?php
namespace App\Helper;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class Helper
{
    public function trjs($data){
        @session_start();
        $data = json_decode($data);
        $val = "";
        $locale = isset($_SESSION['locale']) ? $_SESSION['locale'] : Config::get('app.locale');

        foreach($data as $d){
            if(strtolower($d->locale) == strtolower($locale)){
                $val = $d->value;
                break;
            }
        }
        return $val;
    }

    public function trgs($data) {
        @session_start();
        $val = "";
        $locale = isset($_SESSION['locale']) ? $_SESSION['locale'] : Config::get('app.locale');
        foreach($data as $d){
            if(strtolower($d->locale) == strtolower($locale)){
                $val = $d->value;
                break;
            }
        }
        return $val;
    }

    public function cropTitle($title) {
        $maxNameLength = 90;
        $aspace = " ";

        if (strlen($title) > $maxNameLength) {
            $title = substr(trim($title), 0, $maxNameLength);
            $title = substr($title, 0, strlen($title) - strpos(strrev($title), $aspace));
            $title .= '...';
        }

        return $title;
    }

    public function cropContent($content) {
        $maxDescLength = 180;
        $aspace = " ";

        if (strlen($content) > $maxDescLength) {
            $content = strip_tags($content);
            $content = substr(trim($content), 0, $maxDescLength);
            $content = substr($content, 0, strlen($content) - strpos(strrev($content), $aspace));
            $content .= '...';
        }

        return $content;
    }

    public function cropContentFb($content) {
        $maxDescLength = 200;
        $aspace = " ";

        if (strlen($content) > $maxDescLength) {
            $content = strip_tags($content);
            $content = substr(trim($content), 0, $maxDescLength);
            $content = substr($content, 0, strlen($content) - strpos(strrev($content), $aspace));
            $content .= '...';
        }

        return $content;
    }

    public static function RandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }



    public static function imageUpload($file, $type, $width, $thumbWidth) {
        $photoname = $type.'_'.Helper::RandomString(20).'_'.time().'.'.$file->getClientOriginalExtension();

        $thumbPath = public_path('/uploaded/thumbnail');

        $img = Image::make($file->getRealPath());
        $img->resize($thumbWidth, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($thumbPath.'/'.$photoname);

        $destinationPath = public_path('/uploaded');
        $image = Image::make($file->getRealPath());
        $image->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$photoname);

        /*$file->move($destinationPath, $photoname);*/

        return $photoname;
    }

    public static function articleImageUpload($file, $type, $width, $thumbWidth) {
        $photoname = $type.'_'.Helper::RandomString(20).'_'.time().'.'.$file->getClientOriginalExtension();

        $thumbPath = public_path('/uploaded/thumbnail');

        $img = Image::make($file->getRealPath());
        $img->fit(230, 300, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($thumbPath.'/'.$photoname);

        $destinationPath = public_path('/uploaded');
        $image = Image::make($file->getRealPath());
        $image->fit(1600, 1067, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$photoname);

        /*$file->move($destinationPath, $photoname);*/

        return $photoname;
    }

    public static function ImageUploader($file, $type, $imageWidth, $imageHeight, $thumbWidth, $thumbHeight) {
        $photoname = $type.'_'.Helper::RandomString(20).'_'.time().'.'.$file->getClientOriginalExtension();

        $thumbPath = public_path('/uploaded/thumbnail');

        $img = Image::make($file->getRealPath());
        $img->fit($thumbWidth, $thumbHeight, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($thumbPath.'/'.$photoname);

        $destinationPath = public_path('/uploaded');
        $image = Image::make($file->getRealPath());
        $image->fit($imageWidth, $imageHeight, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$photoname);

        return $photoname;
    }

    public static function formatDate($date) {
        $year = date('Y', strtotime($date));
        $month = date('M', strtotime($date));
        $day = date('d', strtotime($date));

        return "<span><i>".$day."</i> ".$month." <i>". $year ."</i></span>";
    }
}
