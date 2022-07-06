
     <div class="resultContainer  text-center mx-auto mt-5">
     
    <?php
    include("./database connection.php");
    //connected with database
    //get table from databse
    $sql="SELECT * FROM task";
    //connect Database with table
    $query=mysqli_query($connection,$sql);
    
    if($query){
        $totalRows=mysqli_num_rows($query);
        //Looping each row from Query array as a row
        while($row=mysqli_fetch_assoc($query)){
           echo "
           <div class=' result p-2 rounded mb-2 d-flex algn-item-center justify-content-between' style='background-color:#F1F1F1;'>
           <div  class='mt-2 ps-3'>
            {$row['name']}
            </div>
            <a href='delete.php?id={$row['id']}' style='opacity:0' class='dustbinContainer text-center bg-danger px-3 py-2 rounded text-white'>
            <i class='fa-solid fa-trash-can' ></i>
            </a>
           </div>
            
            
            
            ";
            
        }
    }
    
    ?>
    </div>

