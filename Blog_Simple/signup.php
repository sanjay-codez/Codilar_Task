<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, User!</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
  <script>
         function myFunction() {
               alert("Account Created Wait For Admin Approval!");
               }
  </script>



</head>

<body>
    
          <!-- NavBar Start  -->
          <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
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
                                   <a class="nav-link active" href="login.php"><button type="button" class="btn btn-outline-warning">Login</button></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="signup.php"><button type="button" class="btn btn-outline-warning">Signup</button></a>
                               </li>
                        </ul>
                    </div>
          </nav>
                
          <!-- NavBar End  -->

          

        <!-- Signup  Form  -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12" >
                    
                    <form action="register.php" method="POST" enctype="multipart/form-data" onsubmit="myFunction()">

                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName"  placeholder="Enter Name" name="name" required>
                          </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Your Photo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="uploadfile">
                          </div>

                          <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">If You have Account ? <a href="login.php">Login</a></label>
                          </div>

                        <button type="submit" class="btn btn-primary" name="signup" >Submit</button>
                      </form>
                            
               </div>

               <div class="col-md-4 col-sm-9">

               </div>

            </div>
        </div>

           


          <!--  -->


          




</body>
</html>