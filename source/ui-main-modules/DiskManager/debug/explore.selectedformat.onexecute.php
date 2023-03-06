<?php $cd = c("icons->cd");
$app  = c("icons->app");
$audio  = c("icons->audio");
$blank  = c("icons->blank");
$icofile  = c("icons->file");
$doc  = c("icons->doc");
$font  = c("icons->font");
$help  = c("icons->help");
$packed  = c("icons->pack");
$pic = c("icons->pic");
$sys = c("icons->system");
$text = c("icons->text");
$video = c("icons->video");
$folder = c("icons->folder");


$file = c("files")->items->selected;
$res = fileExt("$file");
c("file_dot")->caption = ".".$res;
if( $res <> ''){
		switch($res){

		//PICTURES
		case 'png':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'jpg':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'gif':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'jpeg':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'al':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'ico':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'psd':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'tif':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'tiff':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'bmp':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'svg':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'cur':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'icns':
		$pic->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

		//AUDIO
		case 'aif':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'cda':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mid':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'midi':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mp3':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mpa':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wav':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'ogg':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wma':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wpl':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'acc':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'flac':
		$audio->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

		//PACKED
		case '7z';
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'arj':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'deb':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'pkg':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'rar':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'rgm':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'tar.gz':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'z':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'zip':
		$packed->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

		//IMAGES
		case 'bin':
		$cd->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'dmg':
		$cd->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'iso':
		$cd->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'toast':
		$cd->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'vcd':
		$cd->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'vhd':
		$cd->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

        //SYSTEM
        case 'csv':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'dat':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'db':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'log':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mdb':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'sav':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'sql':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'tar':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'dll':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'sys':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'dmp':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'bak':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'cab':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'cpl':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'drv':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'lnk':
		$sys->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

		
        //APPS
        case 'app':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'exe':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'exec':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'apk':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'bat':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'bin':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'ogi':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'ol':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'com':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'gadget':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'jar':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'py':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wsf':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'msi':
		$app->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		
		//FONTS
        case 'fnt':
		$font->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'fon':
		$font->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'otf':
		$font->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'tff':
		$font->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		
		//INTERNET
        case 'asp':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'aspx':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'html':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'css':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'js':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'php':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'xhtml':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'rss':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'xml':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

		//DOCS
        case 'key':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'odp':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'pps':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'ppt':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'pptx':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'txt':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'rtf':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'ods':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'xlr':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'xls':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'xlsx':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'doc':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'doc':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'pdf':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wpd':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wps':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wls':
		$doc->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

		//VIDEO
        case '3g2':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case '3gp':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'avi':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'flv':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'h264':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'm4v':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mov':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mp4':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mpg':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'mpeg':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'rm':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'swf':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'vob':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'wmv':
		$video->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;

		//PROG
        case 'cpp':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'h':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'c':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'php':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'metafile':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'sadui':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'vb':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		case 'cs':
		$text->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		break;
		}
}
		else {
		$blank->picture->copyToClipboard();
		c("file_format")->picture->pasteFromClipboard();
		}
