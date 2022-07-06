<?php
//Databse connection
$connection=mysqli_connect("localhost","root","","todoapp");
if($connection){
   // echo "Database connection success!";
}
else{
    echo "Databse connection failed!".mysqli_connection_error();
}
?>