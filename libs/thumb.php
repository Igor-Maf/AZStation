<?php
define('MAX_IMG_SIZE', 64 * 1024); //64kb
define("IMG_TYPE", serialize (array("gif", "jpg", "png", "jpeg")));

class Thumb {
    public function checkExt($filename) {
        if ($filename) {
            $ext = substr($filename, 1 + strrpos($filename, "."));
            if (in_array($ext, unserialize(IMG_TYPE))) {
                return true;
            }
        } 
    }
    
    public function checkSize($file_tmp) {
        if ($file_tmp) {
            if (filesize($file_tmp) <= MAX_IMG_SIZE) {
                return true;
            } 
        }
    }
    
    public static function saveFile($file_tmp, $filename) {
        if ($file_tmp && $filename) {
            $path = ROOT . 'public' . DS . 'img' . DS . 'gifts' . DS . $filename;
            var_dump($path);
            if (is_dir($path)) {
                if (@move_uploaded_file($file_tmp, $path)) {
                    return true;
                } else {
                    return 'moving fie failed';
                }
            } else {
                return 'directory not found';
            }
        }
    }
}