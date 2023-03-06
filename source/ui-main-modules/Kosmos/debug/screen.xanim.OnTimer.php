<?php $formy = c("screen")->y;
$newy = $formy - 50;
$scrh = $SCREEN->height;
$truscr = 0 - $scrh;
if( $formy < $truscr){
$self->enable = false;}
