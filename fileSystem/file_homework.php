<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" width="200" cellpadding="5">
   <tr>
    <th>Фото</th>
  
   </tr>
   <?php 
$dir='img/';
$photos=scandir('./img/');
if(!empty($photos)){
$photos=array_slice($photos, 2);


   foreach ($photos as $photo) {

   	echo "<tr>";
   	echo"<td><img src='".$dir.$photo."' alt='".$photo."' width='200' /></td>";
   	echo " </tr>";
   }
}else{
	echo "Директория  пуста";
}
echo "<br />";
$docs=scandir('./doc/');
if(!empty($docs)){
$docs=array_slice($docs, 2);


   foreach ($docs as $doc) {

   	echo "<ul>";
   	echo "<li>".$doc."</li>";
   	echo " </ul>";
   }
}else{
	echo "Директория пуста";
}
   ?>
  
 
 </table>

<p><a href="form_to_post.php">Запостить файл</a></p>
</body>
</html>