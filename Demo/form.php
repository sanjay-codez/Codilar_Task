
<?php 
 include 'connection.php';

 if(isset($_POST["submit"]) && isset($_FILES['uploadfile']))
 {
      $name=$_POST['name'];
      $rating=$_POST['rating'];
      $textarea=$_POST['textarea'];
    
      $filename = $_FILES['uploadfile']['name'];
      $filetemp = $_FILES['uploadfile']['tmp_name'];

        $filedivide = explode('.', $filename);

      $filelowertext = strtolower(end($filedivide));

       $file_array = array('jpg', 'png', 'jpeg');

       if(in_array($filelowertext,$file_array))
       {
             $folder='image/'.$filename; 
            move_uploaded_file($filetemp,$folder);
        $insert_query ="INSERT INTO service (Name,Service_Rating,Description,Image) 
                                   VALUES ('$name','$rating','$textarea','$folder')";
       // connection and insert   
         $query = mysqli_query($connection,$insert_query);
        
       }
       header('location:index.php');      
 }

//  else{
//      echo "Not Success";
//  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style_css.css">

<style>
  /*  */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
body
{
  background:grey;
}
    </style>

</head>
<body>
 
<!-- 
<?php 
  
        //  defining the variable and initially empty
        //  7 Field 
          $nameErr=$emailErr=$rateErr="";
          $name=$email=$age=$rate="";
          

        //   if(isset($_POST['SubmutBtn']))
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
            //   
       if(empty($_POST['name']))
       {
          $nameErr = "Name is Required ";
       }else{
              $name = test_input($_POST['name']);
					   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
						$nameErr = "Only alphabets and white space are allowed";  
					}
      }


                // 
                if(empty($_POST['rating'])){
                    $ageErr="Enter Ratting Field";
                }
                else{
                    $rate= test_input($_POST['rating']);
					if (strlen ($rate) != 3) {  
						$rateErr = "Insert Only Number .";  
						}  
          }
          }     
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
?> -->





<!-- 
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    
    <h1> Add New  Service </h1>
    

 <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Write Service Name" required>
        </div>
    </div>


    <div class="form-group row">
        <label for="rating" class="col-sm-4 col-form-label">Service Rating</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="rating" id="rating" placeholder="Rate The Service" required>
        </div>  
    </div>
 
    <div class="form-group row">
        <label for="description" class="col-sm-4 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="textarea" id="description" class="form-control" placeholder="Write about Service" required></textarea>
        </div>
    </div>
      
    <div class="form-group row">
        <label for="description" class="col-sm-4 col-form-label">Upload Image</label>
        <div class="col-sm-10">
            <input type="file" id="image" name="uploadfile" value="Image" required>  
        </div>
    </div>
      
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div> 

    <div class="col-sm-4"></div>
  </div>
</div> -->




              
<!--Navbar Design  -->
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a class="active" href="form.php">Add Service</a></li>
</ul>

        
<div class="container">
               <div class="row">
                     <div class="col-4 offset-md-4 form-div">
                         <form action="" method="POST" enctype="multipart/form-data">

                             <h3 class="text-center">Add The Details</h3>

                                 <div class="form-group text-center" >
                                     <img src="image\download.png" onclick="triggerClick()" alt="No Image" id="profileDisplay" />
                                       <label for="profileImage">Service Image</label>
                                       <input type="file" name="uploadfile" id="profileImage" value="Image" onchange="displayImage(this)" style="display: none;">
                                 </div>


                                 <div class="form-group">
                                        <label for="name">Enter Service Name</label>  
                                         <input type="text" id="name" name="name" class="form-control" required>
                                 </div>
                                 
                                  
                                 <div class="form-group">
                                    <label for="rating">Service Rating</label>  
                                     <input type="text" id="rating" name="rating" class="form-control" required>
                                 </div>

                                 <div class="form-group">
                                    <label for="description">Description</label> 
                                    <textarea name="textarea" id="description"  class="form-control" placeholder="Write about Service" required></textarea> 
                                  </div>
                                  


                                  <div class="form-group">
                                          <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                                  </div>

                          </form>
                     </div>
               </div>
           </div>


           <script src="js\script.js"></script>



</body>
</html

