<?php

if (isset($_POST['submit'])) {

  // We grab the core file
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  // We could also have shortened this by writing:
  // $fileName = $file['name'];
  // Since we grabbed the core file at the start...

  // Here we get the file extension of the uploaded file
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  // Here WE decide which file types we will allow
  $allowed = array('jpg', 'jpeg', 'png', 'pdf','txt');

  // Now we check if the file is an allowed file type
  if (in_array($fileActualExt, $allowed)) {
    // Here we check for upload errors
    if ($fileError === 0) {
      // Here we check for file size
      if ($fileSize < 1000000) {
        // Here we create a new unique name for the file
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        // Here we create the path the file should get uploaded to
        $fileDestination = 'uploaded-files/' . $fileNameNew;
        // Now we upload the file!
        move_uploaded_file($fileTmpName, $fileDestination);
        $alert = "<script>alert('You sucesfully add your file to database!');</script>";
        echo $alert;
        // And send the user back to the front page
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
