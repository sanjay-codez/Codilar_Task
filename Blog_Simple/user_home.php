<?php 

include_once( __DIR__ .DIRECTORY_SEPARATOR."resource".DIRECTORY_SEPARATOR.'session.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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


<link rel="stylesheet" href="css/user_home.css">

<!--  -->

<!--  -->
  
  </head>

  <body>



<!-- Navbar Design Start -->
    
  <nav class="navbar fixed-top navbar-expand-lg navbar-light btn-secondary position-sticky " >
        <a class="navbar-brand" href="#">CODILAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <h4>Home</h4> </a>
                    <!-- <button type="button" class="btn btn-secondary"><h1></h1></button> -->
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><h4>Blogs</h4></a>
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





<!-- First Container  -->
 <div class="container">
  <div class="row">
   <div class="col-md-12 col-sm-12"> 
        

    
    <div id="main-content" class="blog-page">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="images/img1.jpg" alt="First slide">
                            </div>
                            <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="blog_details.php" class="btn btn-outline-secondary">Continue Reading</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);">General</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                                <li><a href="add_comment.php" class="fa fa-comment">128</a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/FFB6C1/000000" alt="">
                            </div>
                            <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);">General</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/FFB6C1/000000" alt="">
                            </div>
                            <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);">General</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/FFB6C1/000000" alt="">
                            </div>
                            <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);">General</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                            </ul>
                        </div>
                    </div>
                                            
                    <ul class="pagination pagination-primary">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>                
                </div>


                
                <div class="col-lg-4 col-md-12 right-box">
                    
                    <div class="card">
                        <div class="header">
                            <h2>Popular Posts</h2>                        
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_post">
                                        <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                                        <span>jun 22, 2018</span>
                                        <div class="img-post">
                                            <img src="https://via.placeholder.com/280x280/FFB6C1/000000" alt="Awesome Image">                                        
                                        </div>                                            
                                    </div>
                                    <div class="single_post">
                                        <p class="m-b-0">new rules, more cars, more races</p>
                                        <span>jun 8, 2018</span>
                                        <div class="img-post">
                                            <img src="https://via.placeholder.com/280x280/FFB6C1/000000" alt="Awesome Image">                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
        
                </div>
            </div>
    
        </div>
    </div>


    <!--  -->





                

        
       </div>
    </div>
 </div>    









  </body>
</html>