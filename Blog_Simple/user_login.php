<?php 

// include_once 'resource\session.php';
// include_once 'resource\connection.php';

 
include_once( __DIR__ .DIRECTORY_SEPARATOR."resource".DIRECTORY_SEPARATOR.'session.php');
include_once( __DIR__ .DIRECTORY_SEPARATOR."resource".DIRECTORY_SEPARATOR.'connection.php');

// when user click on loginbtn if clicked then go inside if 
if(isset($_POST['login']))
{
    // Collect form Data   
    $email = $_POST['email'];
    $password = $_POST['psw'];


    // Admin
    // if($email=="sanjay@gmail.com" && $password=="Sanjay")
    // {
    //     header('location:admin_dash.php');
    // }
   
    // 
  
//----------------------------------------------

    // $check = "SELECT *FROM blog_simple where Is_approved=:1";
    // $stmt = $conn->prepare($check);
    // $stmt->execute();
    
// ------------------------------------------


// Logic For Approv-------------------------------
      $sth = $conn->prepare("SELECT Is_approved FROM blog_simple where Is_approved='0'");
      $sth->execute();
      $result = $sth->fetchAll();
    
    foreach($result as $row)
      {
          $approve= $row['Is_approved']; 

             if($approve=='0')
             {
               //   echo "Login hit";

                    // User Login Logic and check the Password -----------------
                      $query ="SELECT *FROM blog_simple where Email=:email";
                      $stmt = $conn->prepare($query);
                      $stmt->execute(array(':email'=>$email));

                     // any row return from db then store to variable 
                    while($row = $stmt->fetch()){
                                $id = $row['Id'];
                                $hashed_password = $row['Password'];
                                $email= $row['Email'];
 
                         // verify the password 
                              if(password_verify($password,$hashed_password))
                                {
                                   $_SESSION['Id']=$id;
                                   $_SESSION['Email']=$email;   
                                   header('location:user_home.php');
                                } 
                                else
                                   {
                                    echo "<p> Invalid Name and Password </p> ";
                                   }
                         }   
               }  
               else{
                     header('location:login.php?Not_Approve_By_Admin');
                   }      
       }    
}

else
{
      echo " Not Success";
}


?>
