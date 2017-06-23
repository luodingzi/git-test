<?php
//phpinfo();
$mysqli = new mysqli("localhost","root","RootAdmin20170613!","test");

if(!$mysqli){
  echo "databae error";
   }else{
	echo "connect successful";
}

echo "<hr />";

$sql = "select * from goods";

$result = $mysqli->query($sql);

var_dump($result);





$mysqli->close();

?>
