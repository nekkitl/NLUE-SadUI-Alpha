<?php 



ini::open("Data/Options.ini");
ini::read("Voice", "Rone", $p7);

if( $p7 == "1" ){
c("Options->voi")->enable = 1;
}else{
c("Options->voice")->enable = 1;
}
c("Widget->image1")->enabled = 0;
