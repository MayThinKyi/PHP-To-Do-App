<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>To Do App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body >
    <div  class="container">
       <form action="" method="POST">
         <h2 class="fw-bold text-center">To Do List App</h2>
        <div class="d-flex justify-content-between my-4 ">
            <input name="task" class="form-control w-75" type="text" placeholder="Enter a task.">
        <button type="submit" name="addBtn" class="rounded outline-none p-2 border-0" style="background-color:#897CEB;">
            <i class="fa-solid fa-plus fs-5 text-white"></i>
        </button>
        </div>
       </form>
     </div>
   
         <?php
    //Databse connection
    include("./database connection.php");
   
     if(isset($_POST['addBtn'])){
       $task=$_POST['task'];
      
        //get table from databse
     $sql="INSERT INTO task (name) VALUES ('$task')";
     //connect databse with table
     $query=mysqli_query($connection,$sql);
     if($query){
        include_once("./read.php");
       
       
     }else{
        echo "Adding task is failed!Try again...".mysqli_error();
     }
     
          
     }
     
     
      
 
   
    ?>
  
       
   
</body>