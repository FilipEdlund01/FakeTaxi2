<?php

if (isset($_POST['submit'])) {

  
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

 
  $allowed = array('jpg', 'jpeg', 'png', 'pdf','txt');

 
  if (in_array($fileActualExt, $allowed)) {
   
    if ($fileError === 0) {
  
      if ($fileSize < 10000000000000) {
    
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
      
        $fileDestination = 'uploaded-files/' . $fileNameNew;

      
        move_uploaded_file($fileTmpName, $fileDestination);
        $alert = "<script>alert('You sucesfully add your file to database!');</script>";
        echo $alert;
       
        header("Location: userMain.php?upload=success");


      }
      else {
        echo "<h1>Your file is too big!</h1>";
        $alert = "<script>alert('Your file is too big!');</script>";
        echo $alert;
      }
    }
    else {
      echo "There was an error uploading your file!";
      $alert = "<script>alert('Erroro ocured while uploading file!');</script>";
      echo $alert;
    }
  }
  else {
    echo "You cannot upload files of this type!";
    $alert = "<script>alert('You cannot upload files of this type!');</script>";
    echo $alert;
  }

}
