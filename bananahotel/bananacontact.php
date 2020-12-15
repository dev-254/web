  <?php
  include_once('banana.dbh.php');
		   if (isset($_POST['submit']));
	  $fname = $_POST['fname'];
	  $email = $_POST['email'];
	   $phone = $_POST['phone'];
	    $subject = $_POST['subject'];
	     $nbr_adults = $_POST['nbr_adults'];
	     $nbr_children = $_POST['nbr_children'];
	      $date_arrival = $_POST['date_arrival'];
	       $date_departure = $_POST['date_departure'];
	        $message = $_POST['message'];

	  $sql = "INSERT INTO bookroom(fname, email, phone, subject, nbr_adults, nbr_children, date_arrival, date_departure, message) VALUES('$fname', '$email', '$phone', '$subject', '$nbr_adults', '$nbr_children', '$date_arrival', '$date_departure', '$message')";
	  header("Location: bookroom.php?booking=success");
	  mysqli_query($con, $sql);

