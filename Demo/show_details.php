 
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>


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



  
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button3 {background-color: #f44336;} /* Red */ 




table { 
	width: 750px; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}

  </style>
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>
              
<!--Navbar Design  -->
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a class="active" href="form.php">Add Service</a></li>
</ul>


<table border='2' >

                      <tr>
                            <th >Id</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Location</th>
                            <th>Expert_Size</th>
                            <th>Service_Type</th>
                            <th>Timing</th>
                            <th colspan='2'>Operation</th>
                      </tr>
       



<?php 

                     include 'connection.php';

                     $id =$_GET['id'];


//   Using Simple Select Query 

                    
                     $firstTable =mysqli_query($connection,"SELECT *FROM service where Id=$id");
                    //  $secondTable =mysqli_query($connection,"SELECT *FROM service_location where S_Fr_Id=$id");
                    //  $thirdTable =mysqli_query($connection,"SELECT *FROM service_expert_size where Ses_Fr_Id=$id");
                    //  $fourthTable=mysqli_query($connection,"SELECT *FROM service_type where St_Fr_Id=$id");
                    //  $fiveTable=mysqli_query($connection,"SELECT *FROM service_time where Stm_Fr_id=$id");

                       $fetch1=mysqli_fetch_array($firstTable);
                    //    $fetch2=mysqli_fetch_array($secondTable);
                    //    $fetch3=mysqli_fetch_array($thirdTable);
                    //    $fetch4=mysqli_fetch_array($fourthTable);
                    //    $fetch5=mysqli_fetch_array($fiveTable);
                    
      



//  Using Join Query 
 
                       $h=mysqli_query($connection,"SELECT Id,Name,Service_Rating,Description,Image,service_location.Location FROM service INNER JOIN service_location ON service.Id=service_location.S_Fr_Id WHERE service.Id=$id");
                       $h1= mysqli_fetch_array($h);
   
                       $b=mysqli_query($connection,"SELECT Id,Name,Service_Rating,Description,Image,service_expert_size.Expert_Size FROM service INNER JOIN service_expert_size ON service.Id=service_expert_size.Ses_Fr_Id WHERE service.Id=$id");
                        $b1= mysqli_fetch_array($b);
   
                       $c=mysqli_query($connection,"SELECT Id,Name,Service_Rating,Description,Image,service_type.Service_Type FROM service INNER JOIN service_type ON service.Id=service_type.St_Fr_Id WHERE service.Id=$id");
                       $c1= mysqli_fetch_array($c);
   
   
                       $d=mysqli_query($connection,"SELECT Id,Name,Service_Rating,Description,Image,service_time.Timing FROM service INNER JOIN service_time ON service.Id=service_time.Stm_Fr_id WHERE service.Id=$id");
                       $d1= mysqli_fetch_array($d);
   



                       
                  if(null !== $h1['Location'] && null !==  $b1['Expert_Size'] &&  null !==  $c1['Service_Type'] && null !==  $d1['Timing'])
                  {
                    echo    
                        "     
                           <tr>
                    
                                 <td>".$h1['Id']."</td>
                                 <td>".$h1['Name']."</td>
                                 <td>".$h1['Service_Rating']."</td>
                                 <td>".$h1['Description']."</td>
                                 <td><img src=' ".$h1['Image']." '  height='100' width='100' /></td>
                                 <td>".$h1['Location']."</td>
                                 <td>".$b1['Expert_Size']."</td>
                                 <td>".$c1['Service_Type']."</td>
                                 <td>".$d1['Timing']."</td>
                                 <td> <a href='update.php?id=$h1[Id]'><button class='button'>Edit</button></a> </td>
                                 <td> <a href='delete.php?id=".$h1['Id']."'> <button class='button button3'>Delete</button></a></td>
                           </tr>
                           
                           </table>

                         ";     
                           
                  }

                  else
                  {
                    echo    
                    "
                      
                       <tr>
                
                             <td>".$fetch1['Id']."</td>
                             <td>".$fetch1['Name']."</td>
                             <td>".$fetch1['Service_Rating']."</td>
                             <td>".$fetch1['Description']."</td>
                             <td><img src=' ".$fetch1['Image']." '  height='100' width='100' /></td>
                             <td>No Data Added</td>
                             <td>No Data Added</td>
                             <td>No Data Added</td>
                             <td>No Data Added</td>
                             <td> <a href='update.php?id=$fetch1[Id]'><button class='button'>Edit</button></a> </td>
                             <td> <a href='delete.php?id=".$fetch1['Id']."'> <button class='button button3'>Delete</button></a></td>
                       </tr>
                       
                       

                     ";     
                       
                  }
 ?>
                 
    
 </table>




</body>
</html>


                 
