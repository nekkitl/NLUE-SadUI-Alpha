<?php global $curX, $curY, $formX, $formY;
c("aboutme")->x = $formX - ( $curX - cursor_pos_x() );
c("aboutme")->y = $formY - ( $curY - cursor_pos_y() );
