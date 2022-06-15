<?php
$image = imagecreatetruecolor(1400, 1400);
$background= imagecolorallocate($image, 0,0,0);
$white = imagecolorallocate($image, 255,255,255);
$orange = imagecolorallocate($image, 255,127,0);
$color1 = imagecolorallocate($image,  4, 3, 127 );
$color2 = imagecolorallocate($image, 244, 159, 28 );
$blue = imagecolorallocate($image, 32, 10, 178 );
$red = imagecolorallocate($image, 255, 0, 0 );


imagefill($image, 0, 0, $blue);
header('Content-type: image/png');
$text = 'M';
$font = './fonts/Nuvel.ttf';
imagettftext($image, 1200, 0, 50, 1150, $background, $font, $text);

$text = 'H';
$font = './fonts/Newton Howard Font Italic.ttf';
imagettftext($image, 1050, 0, 320, 1300, $white, $font, $text);

imagepng($image); //renvoie une image sous format png //on crée un cercle //renvoie une image sous format png
imagedestroy($image); //détruit l'image, libérant ainsi de la mémoire
?>  