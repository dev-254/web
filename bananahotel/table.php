  <?php
  include_once('banana.dbh.php');
		   if (isset($_POST['submit']));
	  $fname = $_POST['fname'];
	  $email = $_POST['email'];
	   $phone = $_POST['phone'];
	    $subject = $_POST['subject'];
	        $message = $_POST['message'];

	  $sql = "INSERT INTO booktable(fname, email, phone, subject,  message) VALUES('$fname', '$email', '$phone', '$subject', '$message')";
	  header("Location: booktable.php?booking=success");
	  mysqli_query($con, $sql);
	  ?>
