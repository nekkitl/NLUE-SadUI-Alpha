<?php $r = date("H");
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
$num = "hour_$r";

}else{
$num = "hour_$r";
}
c("voicep")->loop = 0;
global $patch;
c("voicep")->fileName = "$patch/watch/$num.mp3";

c("voicep")->play();

c("v2")->enable = 1;
