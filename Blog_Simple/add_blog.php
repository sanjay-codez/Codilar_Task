<?php 

include_once( __DIR__ .DIRECTORY_SEPARATOR."resource".DIRECTORY_SEPARATOR.'session.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="b1.css"> -->
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <title>Hello, User!</title>
 
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
     <!--  -->
 
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <!------ Include the above in your HEAD tag ---------->
 
 <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
 <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
 
 <!-- <script src="https://kit.fontawesome.com/20e6513a25.js" crossorigin="anonymous"></script> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
 
 
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="css/blog_add.css">


</head>
<body>
    



       
  <nav class="navbar fixed-top navbar-expand-lg navbar-light btn-secondary position-sticky " >
    <a class="navbar-brand" href="#">CODILAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav w-100">
            <li class="nav-item active">
                <a class="nav-link" href="user_home.php"> <h4>Home</h4> </a>
                <!-- <button type="button" class="btn btn-secondary"><h1></h1></button> -->
            </li>


            <li class="nav-item dropdown ml-auto">
                <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown link </a> -->
    
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/img1.jpg" width="40" height="40" class="rounded-circle">
                  </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">View</a>
                    <a class="dropdown-item" href="add_blog.php">Add Blog</a>
                    <div class="dropdown-divider bg-primary"></div>
                    <a class="dropdown-item" href="logout.php">Signout</a>
                </div>

            </li>
        </ul>

    </div>
</nav>


       
<div class="container">
    <div class="row">

          <div class="col-4 offset-md-4 form-div">
              <form action="" method="POST" enctype="multipart/form-data">

                  <h3 class="text-center"> <strong>Add New Blog</strong> </h3>

                      <div class="form-group text-center" >
                          <img src="images\download.png" onclick="triggerClick()" alt="No Image" id="profileDisplay" />
                            <label for="profileImage">Blog Image</label>
                            <input type="file" name="uploadfile" id="profileImage" value="Image" onchange="displayImage(this)" style="display: none;">
                      </div>


                      <div class="form-group">
                             <label for="name">Blog Title </label>  
                              <input type="text" id="name" name="name" class="form-control" required>
                      </div>
                      
                       
                      <!-- <div class="form-group">
                         <label for="rating">Choose Date</label>  
                          <input type="date" id="rating" name="rating" class="form-control" required>
                      </div> -->

                      <div class="form-group">
                         <label for="description">Blog Description</label> 
                         <textarea name="textarea" id="description"  class="form-control" placeholder="Write about Service" required></textarea> 
                       </div>
                       


                       <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                       </div>

               </form>
          </div>

    </div>
</div>


<script src="js/script.js"></script>









</body>
</html>