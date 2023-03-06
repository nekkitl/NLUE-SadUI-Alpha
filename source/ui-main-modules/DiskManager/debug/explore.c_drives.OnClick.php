<?php getDiskInfo($self->items->selected);
c("diskABC")->caption = $self->items->selected;

if( c("type1")->caption == "Unknown"){
c("path")->caption = "No Files";
c("files")->text = "";
message("No such file/dir or no permissions");
}

else{
c("path")->caption = $self->items->selected.":\\";
c("files")->text = scandir($self->items->selected.":\\");
c("files")->visible = true;
}
