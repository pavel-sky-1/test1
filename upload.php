<?php
$output_dir = "/data/www/000001_sky-hosts.ru/www/mst1/uploads/";
//print_r($_FILES);
//die();
if(isset($_FILES["file"]))
{
	$ret = array();
        
   
//	This is for custom errors;	
/*	$custom_error= array();
	$custom_error['jquery-upload-file-error']="File already exists";
	echo json_encode($custom_error);
	die();
*/
        
	$error =$_FILES["file"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["file"]["name"])) //single file
	{
 	 	$fileName = $_FILES["file"]["name"];
 		if (move_uploaded_file($_FILES["file"]["tmp_name"],$output_dir.$fileName))
                    {
                    $ret[]= $fileName;
                    }
                else
                    {
                    $ret[]= "error to move file";
                    echo "error to move file";
                    print_r(error_get_last());
                    }
    	
	}
	else  //Multiple files, file[]
	{
	  $fileCount = count($_FILES["file"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$fileName = $_FILES["file"]["name"][$i];
		if (move_uploaded_file($_FILES["file"]["tmp_name"][$i],$output_dir.$fileName))
                    {
                    $ret[]= $fileName;
                    }
                else
                    {
                    $ret[]= "error to move file";
                    echo "error to move file";
                    print_r(error_get_last());
                    }
	  }
	
	}
    echo json_encode($ret);
 }
else
    echo "no files";
 ?>
