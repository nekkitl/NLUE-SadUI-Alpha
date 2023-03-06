<?php global $curX, $curY, $formX, $formY;
c("downloads")->x = $formX - ( $curX - cursor_pos_x() );
c("downloads")->y = $formY - ( $curY - cursor_pos_y() );

