 
<?php 

    
?>


<?php 
 
 include 'connection.php';
 $id =$_GET['id'];
// echo $id;


 if(isset($_POST["SubmitBtn"]))
 {
        //4  field   - 4 table
      $location=$_POST['location'];
      $size=$_POST['expert_size'];
      $service_type=$_POST['service_type'];
      $service_slot=$_POST['time_slot'];
      

     //   location         Table(service_location)                Foregin Key(S_Fr_Id)   - Location
    //   Number Of Expert  Table(service_expert_size)             Foregin Key(Ses_Fr_Id) - Expert_Size     
   //    Service Type      Table(service_type)                    Foregin Key(St_Fr_Id)  - Service_Type
  //     Service Time      Table(service_time)                    Foregin Key(Stm_Fr_id) - Timing



//   If Data Already Present in Database  then if user click to add data again then it say that data

        $insert_query ="INSERT INTO service_location(S_Fr_Id,Location) 
                                   VALUES ('$id','$location')";  
        $query = mysqli_query($connection,$insert_query);

		
// 
        $insert_query1 ="INSERT INTO service_expert_size(Ses_Fr_Id,Expert_Size) 
                                   VALUES ('$id','$size')";
       $query1 = mysqli_query($connection,$insert_query1);

	   
// 
       $insert_query2 ="INSERT INTO service_type(St_Fr_Id,Service_Type) 
                                   VALUES ('$id','$service_type')";
       $query2 = mysqli_query($connection,$insert_query2);


// 
       $insert_query3 ="INSERT INTO service_time(Stm_Fr_id,Timing) 
                                   VALUES ('$id','$service_slot')";
       $query3 = mysqli_query($connection,$insert_query3);



        echo "Success";
      
       header('location:index.php');
       
 }

 else{
     echo "Not Success";
 }
?>




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
</head>

<body>



<!-- Validation Using Php   Here I am Remove  -->

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="form.php"></span> Add Service</a></li>
</ul>

<!--  -->


	<h1>Add More Details</h1>

	<!-- Create Form -->

	<!-- When Submit button click it goes to another page in action section passed  -->
	<form action="" method="POST" enctype="multipart/form-data">

		

    <div class="form-control">
			<label for="location" id="label-age">Enter Service Location</label>
			<!-- Input Type Text -->
			<input type="text" id="location" name="location" placeholder="Service Available Location" required>
            <span class="error">* </span>
		</div>

        <div class="form-control">
			<label for="expert_size" id="label-age">Number Of Expert For Service</label>
			<!-- Input Type Text -->
			<input type="number" id="expert_size" name="expert_size" placeholder="Availabe Expert For Service" required>
            <span class="error">* </span>
		</div>



		<div class="form-control">
			<label for="time_slot" id="label-role"> Select Service Type</label>
			<!-- Dropdown options - Select -->
			<select name="service_type" id="role" required>
            
				<option  value="Onsight">Onsight</option>
				<option  value="Offsight">Offsight</option>
                <span class="error">*</span>
			</select>
		</div>

        <div class="form-control">
			<label>Choose Service Time Slot</label>
			<!-- Input Type Radio Button -->
			<label for="recommed-1">
				<input type="radio" id="recommed-1" name="time_slot" value="6AM-12PM" required>6AM-12PM</input>
           </label>
			<label for="recommed-2">
				<input type="radio" id="recommed-2" name="time_slot" value="2PM-9PM" required>2PM-9PM</input>
			</label>
		</div>


		<!-- Multi-line Text Input Control -->
		<button type="submit" value="submit" name="SubmitBtn">
			Submit
		</button>



	</form>

</body>

</html>

