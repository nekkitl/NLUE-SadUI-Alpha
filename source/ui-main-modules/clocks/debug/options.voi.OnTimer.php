<?php ini::open("Data/Options.ini");
ini::read("Voice", "Ron", $p6);
global $patch;
c("voicep")->fileName = "$patch/watch/$p6";
c("voicep")->play();
c("voice")->interval = 1000;
c("voice")->enable = 1;
