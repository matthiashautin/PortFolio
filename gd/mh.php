<?php
$image = imagecreatetruecolor(1300, 1200);
$background= imagecolorallocate($image, 105,105,105);
imagefill($image, 0, 0, $background);
header('Content-type: image/png');
$white = imagecolorallocate($image, 255, 255, 255);
$color1 = imagecolorallocate($image,  4, 3, 127 );
$color2 = imagecolorallocate($image, 244, 159, 28 );
$text = 'MH';
$font = './fonts/MontserratAlternates-ExtraBold.otf';
imagettftext($image, 518, 0, -50, 850, $white, $font, $text);
imagepng($image); //renvoie une image sous format png //on crée un cercle //renvoie une image sous format png
imagedestroy($image); //détruit l'image, libérant ainsi de la mémoire
?>  