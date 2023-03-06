<?php $moonRnd = rand(0, 1);
$moonWSize = rand(100, 250);
$moonHSize = rand(100, 250);
$moonXPos = rand(0, 800 - $moonWSize);
$moonYPos = rand(0, 150);
$save = new TControlCanvas ( c("Form1") );
$save->savePicture ( "NewPicture.png" );
