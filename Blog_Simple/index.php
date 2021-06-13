<?php 

// include_once '../../config/connection.php';
// include_once '../../public/css/style.css';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="css/style.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Font Awesome  -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--JQuery and Bootstrap CDN  -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>


<body>
    
          <!-- NavBar Start  -->
          <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-secondary position-sticky">
             <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                              </li>
                         </ul>

                         <ul class="nav justify-content-end">
                                <li class="nav-item">
                                   <a class="nav-link active" href='login.php'><button type="button" class="btn btn-outline-warning">Login</button></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="signup.php"><button type="button" class="btn btn-outline-warning">Signup</button></a>
                               </li>
                        </ul>
                    </div>
          </nav>
                
          <!-- NavBar End  -->



          
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
                              <img class="d-block img-fluid" src="images/img1.jpg" alt="First slide">
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
                              <img class="d-block img-fluid" src="images/img1.jpg" alt="First slide">
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
  
  




          <!-- Blog Post -->





</body>

</html>