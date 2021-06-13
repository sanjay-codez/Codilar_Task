

<!--  -->


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	<title>
		Hair cut Form
	</title>


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
/*  */



		/* Styling the Body element i.e. Color,
		Font, Alignment */
		body {
			background-color: grey;
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		/* Styling form-control Label */
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input,
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
		}
        .error
        {
            color:red;
        }
	</style>
	 <link rel="stylesheet" href="css\style_css.css">
</head>

<body>



<!-- Validation Using Php   Here I am Remove  -->

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="form.php"></span> Add Service</a></li>
</ul>

<!--  -->
<a href="index.php"><button class='button'>Check Update</button></a> 

	<h1>Update The Service Details</h1>

	<!-- Create Form -->

	<!-- When Submit button click it goes to another page in action section passed  -->
	<form action="" method="POST" enctype="multipart/form-data">


<?php 

     include 'connection.php';

       $id =$_GET['id'];

$firstTable =mysqli_query($connection,"SELECT *FROM service where Id=$id");
$secondTable =mysqli_query($connection,"SELECT *FROM service_location where S_Fr_Id=$id");
$thirdTable =mysqli_query($connection,"SELECT *FROM service_expert_size where Ses_Fr_Id=$id");
$fourthTable=mysqli_query($connection,"SELECT *FROM service_type where St_Fr_Id=$id");
$fiveTable=mysqli_query($connection,"SELECT *FROM service_time where Stm_Fr_id=$id");

  $fetch1=mysqli_fetch_array($firstTable);
  $fetch2=mysqli_fetch_array($secondTable);
  $fetch3=mysqli_fetch_array($thirdTable);
  $fetch4=mysqli_fetch_array($fourthTable);
  $fetch5=mysqli_fetch_array($fiveTable);

  ?>




    <div class="form-control">
			<label for="name" id="label-age">Name</label>
			<!-- Input Type Text -->
			<input type="text" id="name" name="name" value="<?php echo $fetch1['Name'] ?>" placeholder="Enter Name" required>
            <span class="error">* </span>
		</div>


        <div class="form-control">
			<label for="rating" id="label-age">Service Rating</label>
			<!-- Input Type Text -->
			<input type="text" id="rating" name="rating" value="<?php echo $fetch1['Service_Rating'] ?>" placeholder="Rate The Service" required>
            <span class="error">* </span>
		</div>

        <div class="form-control">
			<label for="description">Description</label>
			<!-- multi-line text input control -->
			<textarea name="textarea" id="description" placeholder="Enter your comment here" required>
            <?php echo $fetch1['Description'] ?>
            </textarea>
            <span class="error">* </span>
		</div>
        




<!--  -->

        <div class="form-group text-center" >
          <img src="<?php echo $fetch1['Image'] ?>" onclick="triggerClick()" alt="No Image" id="profileDisplay" />
            <label for="profileImage">Service Image</label>
            <input type="file" name="uploadfile" id="profileImage" value="Image" onchange="displayImage(this)" style="display: none;">
         </div>

<!--  -->




<!--  -->
        <!-- <div class="form-control">
			<label for="image">Update Your Photo</label>
			 multi-line text input control -->
			<!-- <input type="file" id="image" name="uploadfile" value=" " required>     -->
		<!-- </div>  -->
<!--  -->



         
    <div class="form-control">
			<label for="location" id="label-age">Enter Service Location</label>
			<!-- Input Type Text -->
			<input type="text" id="location" value="<?php echo $fetch2['Location'] ?>" name="location" placeholder="Service Available Location" required>
            <span class="error">* </span>
		</div>

        <div class="form-control">
			<label for="expert_size" id="label-age">Number Of Expert For Service</label>
			<!-- Input Type Text -->
			<input type="number" id="expert_size" value="<?php echo $fetch3['Expert_Size'] ?>" name="expert_size" placeholder="Availabe Expert For Service" required>
            <span class="error">* </span>
		</div>



		<div class="form-control">
			<label for="time_slot" id="label-role"> Select Service Type</label>
			<!-- Dropdown options - Select -->
			<select name="service_type" id="role" required>
            
				<option  value="Onsight"
                <?php  if($fetch4['Service_Type']=='Onsight') 
				           echo "selected";
				  ?> 
                >Onsight</option>
                
				<option  value="Offsight"
                <?php  if($fetch4['Service_Type']=='Offsight') 
				           echo "selected";
				  ?> 
                >Offsight</option>
                <span class="error">*</span>
			</select>
		</div>

        <div class="form-control">
			<label>Choose Service Time Slot</label>
			<!-- Input Type Radio Button -->
			<label for="recommed-1">
				<input type="radio" id="recommed-1" name="time_slot" value="6AM-12PM" 
                <?php  if($fetch5['Timing']=='6AM-12PM') 
				           echo "checked";
				  ?>  
                >6AM-12PM</input>
           </label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2" name="time_slot" value="2PM-9PM" 
                <?php  if($fetch5['Timing']=='2PM-9PM') 
				           echo "checked";
				  ?>
                >2PM-9PM</input>
			</label>
		</div>
   
        
		<!-- Multi-line Text Input Control -->
		<button type="submit" value="submit" name="SubmitBtn">
			Submit
		</button>


	</form>

	<script src="js\script.js"></script>

    
<?php 
 
 include 'connection.php';
        
 if(null !== $fetch2['Location'] && null !==  $fetch3['Expert_Size'] &&  null !==  $fetch4['Service_Type'] && null !==  $fetch5['Timing'])
 {
 if(isset($_POST["SubmitBtn"]) && isset($_FILES['uploadfile']))
 {
      $name=$_POST['name'];
      $rating=$_POST['rating'];
      $textarea=$_POST['textarea'];
    

      $location=$_POST['location'];
      $size=$_POST['expert_size'];
      $service_type=$_POST['service_type'];
      $service_slot=$_POST['time_slot'];
      


      $filename = $_FILES['uploadfile']['name'];
      $filetemp = $_FILES['uploadfile']['tmp_name'];
      
        $filedivide = explode('.', $filename);

      $filelowertext = strtolower(end($filedivide));

       $file_array = array('jpg', 'png', 'jpeg');

       if(in_array($filelowertext,$file_array))
       {



		// if($filetemp != "")
        //  {
		// 	$folder='image/'.$filename; 
        //      move_uploaded_file($filetemp,$folder);
        //       $update ="UPDATE service SET Name='$name',Service_Rating='$rating', Description='$textarea',Image='$folder' WHERE Id='$id' ";  
        //       $query = mysqli_query($connection,$update);
        // } 
		
        //   else
        //   {
        //   $update ="UPDATE service SET Name='$name',Service_Rating='$rating', Description='$textarea',Image='$folder' WHERE Id='$id' ";  
        //   $query = mysqli_query($connection,$update);

        //   }


            $folder='image/'.$filename; 
            move_uploaded_file($filetemp,$folder);

         $update ="UPDATE service SET Name='$name',Service_Rating='$rating', Description='$textarea',Image='$folder' WHERE Id='$id' ";  
         $query = mysqli_query($connection,$update);

         $update1 ="UPDATE service_location  SET  Location='$location' WHERE S_Fr_Id='$id' ";
         $query1 = mysqli_query($connection,$update1);

// 
           $update2 ="UPDATE service_expert_size  SET  Expert_Size='$size' WHERE Ses_Fr_Id='$id' ";
           $query2 = mysqli_query($connection,$update2);
         

// 
              $update3 ="UPDATE service_type  SET  Service_Type='$service_type' WHERE St_Fr_Id='$id' ";
              $query3 = mysqli_query($connection,$update3);



// 
             $update4 ="UPDATE service_time  SET  Timing='$service_slot' WHERE Stm_Fr_id='$id' ";
             $query4 = mysqli_query($connection,$update4);


             echo "Success";
       }
    }
     
 else{
    echo "Not Success";
}  
 }

 else
 {
       echo "<h3> Before Update You Must Add All Details";
 }


?>


</body>

</html>




