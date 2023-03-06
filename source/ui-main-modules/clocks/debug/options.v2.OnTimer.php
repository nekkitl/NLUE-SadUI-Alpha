<?php $r = date("i");

if( $r <= 9 ){
if( $r == "01" ){
$r = 1;
}elseif( $r == "02" ){
$r = 2;
}elseif( $r == "03" ){
$r = 3;
}elseif( $r == "04" ){
$r = 4;
}elseif( $r == "05" ){
$r = 5;
}elseif( $r == "06" ){
$r = 6;
}elseif( $r == "07" ){
$r = 7;
}elseif( $r == "08" ){
$r = 8;
}elseif( $r == "09" ){
$r = 9;
}
$num = "minute_$r";

}else{
$num = "minute_$r";
}

global $patch;
c("voicep")->fileName = "$patch/watch/$num.mp3";
c("voicep")->play();
c("timer3")->enable = 1;
c("Widget->image1")->enabled = 1;
