<?php  
class ImageResizer {
    public function __construct() {}

    private function get_file_extension($orig_image) {
        $filename_array = explode(".", $orig_image); //split file name into an array using the dot
        $file_extension = end ($filename_array); //goto at the end
        $file_extension = $filename_array[1]; //get file extension

        return $file_extension;
    }

    private function set_new_scale($orig_image, $orig_width, $orig_height, $width, $height, $filename) {
        $scale_ratio = $orig_width / $orig_height;
        $scale = $width / $height;

        if ($scale > $scale_ratio) {
            $width = $height * $scale_ratio;
        } else {
            $height = $width / $scale_ratio;
        }
        
        $file_extension = $this->get_file_extension($orig_image);
       
        $new_image = $this->create_from($orig_image);
        
        //delete original image
        unlink($orig_image);

        $tci=imagecreatetruecolor($width, $height);
        
        imagecopyresampled($tci, $new_image, 0, 0, 0, 0, $width, $height, $orig_width, $orig_height);
        
        imagejpeg($tci, $filename, 80);
    }

    private function create_from($orig_image) {
        $file_extension = strtolower($this->get_file_extension($orig_image));
        
        $new_image = "";

        if ($file_extension == "gif") {
            $new_image = imagecreatefromgif($orig_image);
        } else if ($file_extension == "png") {
            $new_image = imagecreatefrompng($orig_image);
        } else {
            $new_image = imagecreatefromjpeg($orig_image);
        }

        return $new_image;       
    }

    public function resize($orig_image, $width, $height, $filename) {
        list($orig_width, $orig_height) = getimagesize($orig_image);
        $this->set_new_scale($orig_image, $orig_width, $orig_height, $width, $height, $filename);
    }
}