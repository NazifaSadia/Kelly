<?php
    include "../db.php";
?>

<?php
  if( isset($_POST['send']) )
  {
      $name       = $_POST['name'];
      $email      = $_POST['email'];
      $subject    = $_POST['subject'];
      $message    = $_POST['message'];

      $query = "INSERT INTO contact_info (name, email, subject, message) VALUES ('$name','$email','$subject','$message')";

      $addInfo = mysqli_query($connect , $query);

      if( $addInfo ){
          header("Location:../contact.php");
      }
      else{
        die("Operation Failed." . mysqli_error($connect));
      }
  }
?>
