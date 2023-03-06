<?php $w = c("wallper")->w;
if( c("wall_left")->w == 0){
wall_anim();
}
else{
$wl = c("wall_left")->w;
$wr = c("wall_right")->w;
$xr = c("wall_right")->x;
c("wall_right")->w = $wr + 1;
c("wall_right")->x = $xr - 1;
c("wall_left")->w = $wl - 1;
}
