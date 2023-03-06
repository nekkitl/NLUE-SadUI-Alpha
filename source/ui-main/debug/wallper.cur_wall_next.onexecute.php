<?php $path = "/wall/";
$rand = rand(1,5);
c("wall_left")->loadFromFile($path.$rand.".jpg");
$rand1 = rand(5,10);
c("wall_right")->loadFromFile($path.$rand1.".jpg");
