<?php

$serverAddress='localhost';
$userName='root';
$password='';
$dataBaseName='akhuwat';

$con= new mysqli($serverAddress,$userName,$password,$dataBaseName);


$sql = "SELECT * FROM `students`";


$result = $con->query($sql);



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>


    <table class="table table-dark table-striped">
    	<tr>
    		<th>Name</th>
    		<th>Email</th>
    		<th>Age</th>
    		<th>Address</th>
    		<th>Gender</th>
    		<th>Password</th>
    		<th>Phone Number</th>
    	</tr>

    	<?php
			if( $result-> num_rows > 0 ){

				

				while( $row = $result-> fetch_assoc() ){


					

					// echo $row['email'];
					// echo ' ';
					// echo $row['age'];
					// echo '<br>';

					echo '<tr>';
					echo '<td>'.$row['email'].'</td>';
					echo '<td>Sample</td>';
					echo '<td>Sample</td>';
					echo '<td>Sample</td>';
					echo '<td>Sample</td>';
					echo '<td>Sample</td>';
					echo '<td>Sample</td>';
					echo '</tr>';

				}



			}else{
				echo 'No data availale';
			}

    	?>
    	
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>



