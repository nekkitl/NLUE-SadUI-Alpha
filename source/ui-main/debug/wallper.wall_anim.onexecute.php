<?php $w = c("wallper")->w;
c("wall_left")->w = $w;
c("wall_right")->x = $w;
c("wall_right")->w = 0;
c("wall_left")->repaint();
c("wall_right")->repaint();
