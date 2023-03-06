<?php $file = $self->items->selected;


if ($self->items->selected == ".."){
    $exp = explode("\\", c("path")->text);
    $count = count($exp);
    unset ($exp[$count - 1]);
    unset ($exp[$count - 2]);
    $newpath = implode("\\", $exp) . "\\";
    ScanFiles($newpath);
}
else{
    if(is_dir(c("path")->text . $file)){
        ScanFiles(c("path")->text . $file . "\\");
    }
    else{
        $pat = c("path")->caption;
        $res = fileExt("$file");
        switch ($res){
        case 'png':c("pngV")->show(); c("pngV->image1")->loadFromFile("$pat" . "$file");
		break;
        case 'jpg': c("pngV")->show(); c("pngV->image1")->loadFromFile("$pat" . "$file");
		break;
        case 'gif': c("pngV")->show(); c("pngV->image1")->loadFromFile("$pat" . "$file");
		break;
        }
    }
}
