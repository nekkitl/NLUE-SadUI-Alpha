<?php global $keyvoice;


ini::open("Data/Options.ini");
ini::read("Voice", "Rone", $p7);

if(get_key_state($keyvoice)<0){ 
if( $p7 == "1" ){
c("voi")->enable = 1;
}else{
c("voice")->enable = 1;
}
c("timer3")->enable =0;
}
