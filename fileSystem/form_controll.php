<?php
$img_dir = './img/';
$doc_dir='./doc/';
$upload_img = $img_dir.basename($_FILES['file']['name']);
$upload_doc = $doc_dir.basename($_FILES['file']['name']);


$check=can_upload($_FILES['file']);
if ($check==="img")
{
	if(copy($_FILES['file']['tmp_name'], $upload_img)){
		//echo "Downloaded img";
		header("Location: file_homework.php");
}
}else if ($check==="doc") {
	if(copy($_FILES['file']['tmp_name'], $upload_doc)){
		//echo "Downloaded doc";
		header("Location: file_homework.php");
	}
}
else { 
	echo $check;  
}



function can_upload($file){
    if($file['name'] == '')
		return 'Вы не выбрали файл.';
	
	if($file['size'] > 122000)
		return 'Файл больше 2 МБ';
	
	
	$getMime = explode('.', $file['name']);
	
	$mime = strtolower(end($getMime));
	
	$types_img = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	$types_doc=array('doc','txt');
	
	if(in_array($mime, $types_img)){
		return "img";
	}else if(in_array($mime, $types_doc)){
		return "doc";
	}else{
		return "Forbidden type";
	}
	
	
  }


