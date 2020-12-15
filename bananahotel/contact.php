
<?php
$dbservername="localhost";
$username="root";
$password="";
$dbname="bananahotel";
//creating a connection,localhost is the server, root is the name and "" is  for password 
$con = mysqli_connect("localhost", "root", "", "bananahotel");
//testing the connection if successful or not
if(!$con && !mysqli_select_db($con,'bananahotel' && !mysqli_query($con,$sql )
{
	 onclick="window.alert('SUCCESSFULL')"
	//echo 'server not connected';
	}else{
		 onclick="window.alert('OPERATION NOT SUCCESSFULL')"
		//echo 'connection successful';
		}
/*connects or selects the database*/		
 /* if(!mysqli_select_db($con,'bananahotel'))
  {
	 // echo 'database not selected';
	   onclick="window.alert('database not selected')"
	  }else{
		  echo 'database selected';
		   }

if(!mysqli_query($con,$sql));
{
	echo "Data has Not been Inserted";
}else{
	
	echo "Data Inserted Successfully";
	$con->close();
	
}*/
