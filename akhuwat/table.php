<?php

$serverAddress='localhost';
$userName='root';
$password='';
$dataBaseName='akhuwat';

$con= new mysqli($serverAddress,$userName,$password,$dataBaseName);


$sql = "SELECT * FROM `students`";


$result = $con->query($sql);

if( $result-> num_rows > 0 ){

	

	while( $row = $result-> fetch_assoc() ){


		echo $row['email'];
		echo ' ';
		echo $row['age'];
		echo '<br>';


	}



}else{
	echo 'No data availale';
}


?>