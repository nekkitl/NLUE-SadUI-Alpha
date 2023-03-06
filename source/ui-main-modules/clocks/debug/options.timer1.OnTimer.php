<?php global $keyvoice;

if( $keyvoice == "" ){
if( file_exists( "Data/Options.ini" ) ){
ini::open("Data/Options.ini");
ini::read("Time", "keyvoice", $keyvoice);
}
}elseif( $keyvoice ){
ini::open("Data/Options.ini");
ini::write("Time", "keyvoice", $keyvoice);
ini::open("Data/Keys.ini");
ini::read("keys", $keyvoice, $key);
c("label3")->caption = "Клавиша: $key(".$keyvoice.")";
}
