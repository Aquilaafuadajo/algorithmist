<?php 

  // connect to database
  $conn = mysqli_connect('ijj1btjwrd3b7932.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'belt5wag26sxy7ks', 'rsuri7ug67fj7eua', 'mc5rvzvpp1im6ely');

  // check connection
  if(!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
  }

?>