<?php
// include composer autoload
require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

echo "Orginal Image : <div><img src='img/sample.jpg' alt='' width='1000px'></div></br>";

$image = Image::make('img/sample.jpg')->resize(300, 200)->save('resize/sample-resize.jpg');

echo "Resize Image : <div><img src='resize/sample2.jpg' alt=''></div>";
?>