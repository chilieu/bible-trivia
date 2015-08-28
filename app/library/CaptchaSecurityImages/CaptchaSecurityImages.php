<?php

class CaptchaSecurityImages extends \Phalcon\Mvc\User\Component {

    var $font = "/monofont.ttf";


    function generateCode($characters) {
        //global $_SESSION;
        /* list all possible characters, similar looking characters and vowels have been removed */
        //$possible = 'abcdfghjkmnpqrstvwxyz123456789ABCDFGHJKMNPQRSTVWXYZ';
        $possible = 'abcdfghjkmnpqrstvwxyz123456789';//removed case sensitivity
        $code = '';
        $i = 0;
        while ($i < $characters) {
            $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $i++;
        }
        $captcha_code = $code;
        $this->session->set("captcha_code", $captcha_code);
        //$_SESSION['captcha_code'] = $captcha_code;
        return $code;
    }

    function CaptchaSecurityImages($width='120',$height='40',$characters='6') {
        $code = $this->generateCode($characters);
        /* font size will be 75% of the image height */
        $this->font = dirname(__FILE__) . $this->font;
        $font_size = $height * (rand(7,9)/10);
        $image = @imagecreate($width, $height) or die('Cannot initialize new GD image stream');
        /* set the colours */
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $text_color = imagecolorallocate($image, 80, 80, 80);
        $noise_color = imagecolorallocate($image, 180, 180, 180);
        /* generate random dots in background */
        for( $i=0; $i<($width*$height)/1; $i++ ) {
            imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
        }
        /* generate random lines in background */
        for( $i=0; $i<($width*$height)/700; $i++ ) {
            imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
        }
        /* create textbox and add text */
        //$textbox = imagettfbbox($font_size, 0, $this->font, $code) or die('Error in imagettfbbox function');
        $textbox = imagettfbbox($font_size, 0, $this->font, $code) or die('Error in imagettfbbox function');
        $x = ($width - $textbox[4])/2;
        $y = ($height - $textbox[5])/2;
        imagettftext($image, $font_size, 0, $x, $y, $text_color, $this->font , $code) or die('Error in imagettftext function');
        /* output captcha image to browser */
        header('Content-Type: image/jpeg');
        imagejpeg($image);
        imagedestroy($image);
    }

}