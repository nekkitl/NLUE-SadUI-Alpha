<?php $w = c("wallper")->w;
c("wall_left")->w = $w;
$path = "/wall/";

$rand = rand(1,5);
c("wall_left")->loadFromFile($path.$rand.".jpg");
$rand1 = rand(5,10);
c("wall_right")->loadFromFile($path.$rand1.".jpg");

if( c("wall_left")->w == $w){
c("right")->enable = true;
}
if( c("wall_right")->w == $w){
c("left")->enable = true;
}
