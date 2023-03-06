<?php global $curX, $curY, $formX, $formY;
c("proxy")->x = $formX - ( $curX - cursor_pos_x() );
c("proxy")->y = $formY - ( $curY - cursor_pos_y() );
