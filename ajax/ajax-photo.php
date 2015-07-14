<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/*if ($handle = opendir(dirname(realpath(__FILE__)).'/data/www/000001_sky-hosts.ru/www/mst1/uploads'))
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                echo '<img src="uploads/'.$file.'" border="0" />';
            }
            else echo "bad file";
        }
else
    echo "bad handle";
*/

/*
$directory = "/data/www/000001_sky-hosts.ru/www/mst1/uploads/";
$images = glob($directory . "*.jpg");

foreach($images as $image)
{
    echo '<img src="uploads/'.$image.'" border="0" />';
}
*/

$dir = "/data/www/000001_sky-hosts.ru/www/mst1/uploads/";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
    $files[] = $filename;
}
$images=preg_grep ('/\.jpg$/i', $files);
$images=preg_grep ('/\.JPG$/i', $files);

foreach($images as $image)
{
    echo '<img src="uploads/'.$image.'" border="0" />';
}

?>

