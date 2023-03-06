<?php global $cv;
global $cvcnt;
$cvmaxcnt = 320;
$pixcl = rand(1, 3);
if( $pixcl == 1 ){
$cvcl = clWhite;}
if( $pixcl == 2 ){
$cvcl = clYellow;}
if( $pixcl == 3 ){
$cvcl = clSkyBlue;}
$cv->pixel( rand(0, 1690), rand(0, 1490), $cvcl);
$cvcnt += 1;
if($cvcnt == $cvmaxcnt){
c("timer1")->enable = false;
Mod();
}
c("Form1")->caption = "Космос [ " . $cvcnt . " / " . $cvmaxcnt . " ]";
