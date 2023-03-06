<?php switch($button){
    case 1: c("popupMenu")->popup( cursor_pos_x(), cursor_pos_y() ); break;
    case 2: $x = cursor_pos_x();
            $y = cursor_pos_y();
            Mouse_Event(2, $x, $y, 0, 0);
            Mouse_Event(4, $x, $y, 0, 0);
           // sleep(2);
            closePage();
            //closePage($button);
           // MessageBox("$button   ".var_export( $shift,true), "savedto");
            break;
}
