<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller {
    
    function createDirectoryIfNeed($dir) {
        if (!File::isDirectory($dir)) {
            Storage::makeDirectory($dir);
        }    
    }

    function downloadFileIfNeed($fileName, $url) {
        if (!Storage::exists($fileName)) {
            $handler = fopen($url, 'r');
            if ($handler == false) return false;
            Storage::put($fileName, $handler);
        }
        return true;
    }    

    public function retrieveThumbnail($id) {
        $url = "http://img4.kanpani.jp/img/character/".$id."/illust/thumbnail.png";
        $dir = "public/thumbnail";
        $fileName = $dir."/".$id.".png";
        
        $this->createDirectoryIfNeed($dir);
        if ($this->downloadFileIfNeed($fileName, $url)) {
            return Storage::url($fileName);
        }
        return 'outdated';
    }

    public function retrieveEquipThumbnail($id) {
        $url = "http://img4.kanpani.jp/img/icon/equipment/small/".$id."_1.png";
        $equipDir = "public/equipment";
        $dir = $equipDir."/small";
        $fileName = $dir."/".$id.".png";

        $this->createDirectoryIfNeed($equipDir);
        $this->createDirectoryIfNeed($dir);
        if ($this->downloadFileIfNeed($fileName, $url)) {
            return Storage::url($fileName);
        }
        return 'outdated';
    }

    public function retrieveItemEffect($id) {
        $url = "http://img4.kanpani.jp/img/header/item_effect/".$id.".png";
        $dir = "public/item_effect";
        $fileName = $dir."/".$id.".png";
        
        $this->createDirectoryIfNeed($dir);
        if ($this->downloadFileIfNeed($fileName, $url)) {
            return Storage::url($fileName);
        }
        return 'outdated';
    }
}
