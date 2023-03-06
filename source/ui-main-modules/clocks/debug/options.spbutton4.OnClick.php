<?php ini::open("Data/Options.ini");
ini::write("Widget", "x", "300");
ini::write("Widget", "y", "40");
c("Widget")->x = $SCREEN->width - 300;
c("Widget")->y = 40;
