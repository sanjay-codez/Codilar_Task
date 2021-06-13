<?php 

include 'connection.php';


// Creating variable to store the 
$id =$_GET['id'];
    // echo $id;  

    $delete=mysqli_query($connection,"DELETE FROM service where Id=$id");
    if($delete) 
    {
        echo "Delete Success";
        header('location:index.php');
    }

    else{
        echo "Not Delete";
    }

?>