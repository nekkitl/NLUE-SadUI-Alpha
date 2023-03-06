<?php global $curX, $curY, $formH, $formW;
c("Form1")->w = $formW - ( $curX - cursor_pos_x() );
c("Form1")->h = $formH - ( $curY - cursor_pos_y() );
c("bar")->repaint();
