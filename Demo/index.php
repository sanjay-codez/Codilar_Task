<!DOCTYPE html>
<html>
<head>
	<title>Service Page </title>
	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Style css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


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

#id
{
  color:cyan;
}

/* body
{
	background: black;
} */

</style>

<body>

              
<!--Navbar Design  -->
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a class="active" href="form.php">Add Service</a></li>
</ul>


	<div class="container">
		<h1 class="text-center">Our Services</h1>
		<hr>
		<div class="row">
			<!-- Product  -->


      
<?php 
 include 'connection.php';
 $result =mysqli_query($connection,"SELECT *FROM service"); 

while($fetch=mysqli_fetch_array($result))
{
echo "

			<div class='col-md-4 product-grid'>

				<div class='image'>

					<a href='show_details.php?id=".$fetch['Id']."'>
						<img src='".$fetch['Image']."' class='w-100'>
						<div class='overlay'>
							<div class='detail'>View Details</div>
						</div>
					</a>

				</div>  
				<h5 class='text-center'>".$fetch['Name']." Service</h5>
				<h5 class='text-center' id='id'>Rating ".$fetch['Service_Rating']." </h5>
				<a href='more_details.php?id=".$fetch['Id']."' class='btn buy'>Add Detail</a>
        
			</div>
		
      ";
}
?>
	</div>
</div>

</body>
</html>