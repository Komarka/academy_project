<?php
function __autoload($className) { 
      if (file_exists($className . '.class')) { 
          require_once $className . '.class'; 
          return true; 
      } 
      return false; 
} 

try
{
	$array=Validation::validate($_POST);
}catch(Exception $e){
 echo "<p>".$e->getMessage()."</p>";
}
$db=DB::getInstance(); 
  $res=$db->insert($array);
 
  header("Location:main.php");











?>