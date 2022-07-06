<?php
$id=$_GET['id'];
echo $id;
//connect with database
include_once("./database connection.php");
//get table from database
$sql="DELETE FROM task WHERE id=$id";
//connected Database with table
$query=mysqli_query($connection,$sql);
if($query){
   echo "Delete success";
   header("location:index.php");

}else{
    echo "Delete failed!".mysqli_error();
}

?>