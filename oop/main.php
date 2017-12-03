
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p><a href="show_form.php">Add comment</a></p>
<hr>
<?php
function __autoload($className) { 
      if (file_exists($className . '.class')) { 
          require_once $className . '.class'; 
          return true; 
      } 
      return false; 
}

$db=DB::getInstance(); 
  $res=$db->select();
  if(isset($_POST['delete'])){
	$id=$_POST['id'];
	$db->delete($id);

}
  foreach ($res as $value) {
  	echo "Name:";
  	echo "<p>".$value['name']."</p>";
  	echo "Comment:";
  	echo "<p>".$value['comment']."</p>";
 echo" <form action='main.php' method='post'>";
 echo "<input type='hidden'  name='id' value=".$value['id'].">";
 echo "<input type='submit'  name='delete' value='DELETE'>";
echo "</form>";
  	echo "<hr>";
  }
?>
</body>
</html>