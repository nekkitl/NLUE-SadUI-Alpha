<?php global $curX, $curY, $formX, $formY;
c("Form1")->x = $formX - ( $curX - cursor_pos_x() );
c("Form1")->y = $formY - ( $curY - cursor_pos_y() );
c("bar")->repaint();
