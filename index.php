<?php
//phpinfo();
$mysqli = new mysqli("localhost","root","RootAdmin20170613!","test");

if(!$mysqli){
  echo "databae error";
   }else{
	echo "successfule";
}
$mysqli->close();
?>
