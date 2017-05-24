<?php
	$dbname = "ddvr7bfki64vm9";
	$password = "9c4deebbecf7ac3fbbd870dd269250b3e3e405097f5b73e23396ca75df26cce4";
	$host = "ec2-54-235-120-39.compute-1.amazonaws.com";
	$user = "cwqcthugegdklr";

	$connection = pg_connect ("host=$host dbname=$dbname user=$user password=$password");
    if(!$connection) {
      echo 'Error connecting to database';
   	}
   	$querySET = "SET SEARCH_PATH TO FORSA";
   	pg_query($connection, $querySET);
?>