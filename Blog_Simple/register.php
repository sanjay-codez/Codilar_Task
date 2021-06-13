
<html>
  <style>
          h2{
            color:green;
          }
  </style>
</html>

<?php 

// include_once 'resource\connection.php';

include_once( __DIR__ .DIRECTORY_SEPARATOR."resource".DIRECTORY_SEPARATOR.'connection.php');


// if user click on signup button 
if(isset($_POST['signup']))
{
     $name      = $_POST['name'];
     $email     = $_POST['email'];
     $password  = $_POST['password'];

     $hash_password = password_hash($password,PASSWORD_DEFAULT);


     $filename = $_FILES['uploadfile']['name'];
      $filetemp = $_FILES['uploadfile']['tmp_name'];

        $filedivide = explode('.', $filename);

      $filelowertext = strtolower(end($filedivide));

       $file_array = array('jpg', 'png', 'jpeg');

 if(in_array($filelowertext,$file_array))
{
             $folder='image/'.$filename; 
            move_uploaded_file($filetemp,$folder);
     
     
            // echo $folder;
            // die('');

// For Storing the Password in Hashing 



// i am uses try catch for error handle and smooth code 
try
  { 
        // blog_simple

     $insert ="INSERT INTO user_info(Name,Email,Password,Image)values(:name,:email,:password,:folder)";
     $stmt = $conn->prepare($insert);

     $stmt->execute(array(':name'=>$name,':email'=>$email, ':password'=>$hash_password, ':folder'=>$folder));

     if($stmt->rowCount()==1)
     {
         
          //  Redirect to same signup page and also send msg but data alreadt goes to database
            header('location:signup.php');
     }
  }
  catch(PDOException $ex)
  {
    echo "<p> Register Not Sucess Sucees   An Error Occured </p>";
  }


}
}


?>