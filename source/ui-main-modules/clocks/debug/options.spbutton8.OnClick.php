<?php global $patch;


dir_search($patch."/watch/", $files, ".mp3", true, true);

err_no();
$boom = NEW SQUALL_Player( c("Options") );
                        $boom->fileName = $patch."/watch/". c("combobox1")->inText;
                        $boom->play();
                        $boom->loop = 0;
                        err_yes();
