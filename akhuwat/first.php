<?php

$serverAddress = 'localhost';
$userName = 'root';
$password = '';
$dataBaseName= 'akhuwat';


$con = new mysqli($serverAddress ,$userName ,$password ,$dataBaseName );


$sql = "UPDATE students SET `password` ='1234' WHERE id=1 ";




if( $con->query($sql) ==TRUE){

	echo "password updated !!";
}else{
	echo 'something went wrong';
}

?>



