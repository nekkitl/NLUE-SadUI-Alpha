<?php $path = "cache/history.sadui";
file_delete($path);
file_put_contents($path,"Last clean: ". date("d M Y"));
c("sadui_history")->text = "Done. \nNo history.";
