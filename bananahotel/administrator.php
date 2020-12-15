<?php
session_start();
include_once 'banana.dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bookroom.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  
    <!-- Nav -->
    <nav class="main-nav">      
      <ul class="main-menu">
        <li><a href="index.php">Index</a></li>
        <li><a href="#Bookings">Bookings</a></li>
        <li><a href="#Contacts">Contacts</a></li>
        <li><a href="#Rooms">content</a></li> 
      </ul>
    </nav>

    <div>
      <section>
        <h4>Booking</h4>
<?php
$sql = "SELECT fname, email, phone, subject, nbr_adults, nbr_children, date_arrival, date_departure FROM bookroom";
$result = mysqli_query($con, $sql);
 echo ' <table class=" table table-hover success" border=3px cell padding=10px><th>fname</th><th>email</th><th>phone</th><th>subject</th><th>nbr_adults</th><th>nbr-children</th><th>date_arrival</th><th>date_departure</th>';
if (mysqli_num_rows($result) > 0)
{
 
  while($row = mysqli_fetch_assoc($result)){
  echo '
  <tr>
    <td>' . $row['fname']. '</td> <td>' . $row['email']. '</td> <td>' . $row["phone"]. '</td>
    <td>' . $row["subject"]. '</td>
    <td>' . $row["nbr_adults"]. '</td>
    <td>' . $row["nbr_children"]. '</td>
    <td>' . $row["date_arrival"]. '</td>
    <td>' . $row["date_departure"]. '</td>
</tr>
 </ br>
 ';
}}
else{
    echo "<div class='font'>";
  echo "No bookings yet!";
  echo "</div>";
}
?>
</section>
<br><br><br>
<section id="Booking"><br>
<?php
$sql = "SELECT fname, email, phone, message FROM bookroom";
$result = mysqli_query($con, $sql);
  echo '<h4>Contact</h4><br>';
  echo '<table class="table table-bordered info" border=3px cell padding=10px><th>fname</th><th>email</th><th>phone</th><th>message</th>';

if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result)){
  echo '
  <tr>
    <td>' . $row['fname']. '</td> <td>' . $row['email']. '</td> <td>' . $row["phone"]. '</td>
    <td>' . $row["message"]. '</td>
</tr>
 </ br>
 ';
}}
else{
    echo "<div class='font'>";
  echo "No contacts yet!";
  echo "</div>";
}
?>
</section>