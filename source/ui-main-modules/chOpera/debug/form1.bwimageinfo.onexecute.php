<?php global $lastClickImage;


$filename  = DOC_ROOT.'temp\\tmp.img';

$chrom = addPage();
$chrom->html = 'Получаю информацию...';

$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $lastClickImage);
      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$data = curl_exec($ch);
file_put_contents($filename,$data);

$jpeg_header_data =  get_jpeg_header_data($filename);
$text = '<html><head><title>Свойства изображения</title> <style>'.@file_get_contents(DOC_ROOT.'localhost\\css\imageinfo.css').'</style></head><body>';

$size = getimagesize ($filename);
if($size !== false){

    $base64 = 'data:'.$size['mime'].';base64,'.base64_encode($data);
    
    $text.= '<img src="'.$base64.'"/ style="max-height:200px; border:1px solid black">';
    $text.= '<h1>Свойства изображения</h1><table border=1>';
    $text.= '<tr><td>URL</td><td>'.$lastClickImage.'</td></tr>';
    $text.= '<tr><td>Размер</td><td>'.round(filesize($filename)/1024/1024,3).' MБ ('.filesize($filename).' Байт)</td></tr>';
    $text.= '<tr><td>Ширина</td><td>'.$size[0].'</td></tr>';
    $text.= '<tr><td>Высота</td><td>'.$size[1].'</td></tr>';
    $text.= '<tr><td>Тип</td><td>'.$size['mime'].'</td></tr>';
    $text.= '<tr><td>Base64</td><td><input type="text" value="'.$base64.'" onclick="select( this );" style="width:200px;" readonly/></td></tr></table><br/>';
    
    if($jpeg_header_data!==false)$text.= '<h1>Расширенная информация</h1>';
    $text.=Generate_JPEG_APP_Segment_HTML( $jpeg_header_data );
    $text.=Interpret_intrinsic_values_to_HTML( get_jpeg_intrinsic_values( $jpeg_header_data ) );
    $text.=Interpret_Comment_to_HTML( $jpeg_header_data );
    $text.=Interpret_JFIF_to_HTML( get_JFIF( $jpeg_header_data ), $filename );
    $text.=Interpret_JFXX_to_HTML( get_JFXX( $jpeg_header_data ), $filename );
    $text.=Interpret_App12_Pic_Info_to_HTML( $jpeg_header_data );
    $text.=Interpret_EXIF_to_HTML( get_EXIF_JPEG( $filename ), $filename );
    $text.=Interpret_XMP_to_HTML( read_XMP_array_from_text( get_XMP_text( $jpeg_header_data ) ) );
    $text.=Interpret_IRB_to_HTML( get_Photoshop_IRB( $jpeg_header_data ), $filename );
    $text.=Interpret_EXIF_to_HTML( get_Meta_JPEG( $filename ), $filename );
}
else $text.='<h2>Данный файл не является изображением. Не удалось получить о нём информацию</h2>';


                

$chrom->loadString($text.'</body></html>',$lastClickImage);
