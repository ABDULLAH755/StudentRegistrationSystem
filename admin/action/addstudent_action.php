<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// Check file size
if ($_FILES["fileToUpload2"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}



// Check file size
if ($_FILES["fileToUpload3"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


require_once 'db_connect.php';

if($_POST) {
  $form_number = $_POST['formNumber'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $father_name = $_POST['father_name'];
  $birthday = $_POST['birthday'];
  $gender = $_POST['gender'];
  $nationality = $_POST['nationality'];
  $domicile = $_POST['domicile'];
  $cnic = $_POST['cnic'];
  $email = $_POST['email'];
  $user_password = $_POST['user_password'];
  $course = $_POST['course'];
  
  $degree = $_POST['degree'];
  $year = $_POST['year'];
  $institute = $_POST['institute'];
  $img = $_FILES["fileToUpload"]["name"];
  
  $degree2 = $_POST['degree2'];
  $year2 = $_POST['year2'];
  $institute2 = $_POST['institute2'];
  $img2 = $_FILES["fileToUpload2"]["name"];
  
  $degree3 = $_POST['degree3'];
  $year3 = $_POST['year3'];
  $institute3 = $_POST['institute3'];
  $img3 = $_FILES["fileToUpload3"]["name"];


  $mail = $_POST['mail'];
  $contact_mail = $_POST['contact_mail'];
  $address = $_POST['address'];
  $contact_no = $_POST['contact_no'];
  $e_address = $_POST['e_address'];
  $contact_e = $_POST['contact_e'];
  $occupation = $_POST['occupation'];
  $income = $_POST['income'];
  

    $sql = "INSERT INTO student (`form_number`,`first_name`, `last_name`, `father_name`, `birthday`, `gender`, `nationality`, `domicile`, `cnic`, `email`, `user_password`, `course`, `degree`, `year`, `institute`, `img`, `degree2`, `year2`, `institute2`, `img2`, `degree3`, `year3`, `institute3`, `img3`, `mail`, `contact_mail`, `address`, `contact_no`, `e_address`, `contact_e`, `occupation`, `income`) VALUES ('".$form_number."', '".$first_name."', '".$last_name."', '".$father_name."', '".$birthday."', '".$gender."', '".$nationality."', '".$domicile."', '".$cnic."', '".$email."', '".$user_password."', '".$course."', '".$degree."', '".$year."', '".$institute."', '".$img."', '".$degree2."', '".$year2."', '".$institute2."', '".$img2."', '".$degree3."', '".$year3."', '".$institute3."', '".$img3."', '".$mail."', '".$contact_mail."', '".$address."', '".$contact_no."', '".$e_address."', '".$contact_e."', '".$occupation."', '".$income."')";
  

     $query1 = $connect->query($sql);
    
    $student_id = $connect->insert_id;
 

   $sql2 = "INSERT INTO student_qualification (`sid`, `course`, `degree`, `year`, `institute`, `img`, `degree2`, `year2`, `institute2`, `img2`, `degree3`, `year3`, `institute3`, `img3`) VALUES ('".$student_id ."', '".$course."', '".$degree."', '".$year."', '".$institute."', '".$img."', '".$degree2."', '".$year2."', '".$institute2."', '".$img2."', '".$degree3."', '".$year3."', '".$institute3."', '".$img3."')";
    
    $query2 = $connect->query($sql2);


  if($query1 && $query2) {
    //echo "<p>New Record Successfully Created</p>";
    //echo "<a href='../sign_up.php'><button type='button'>Back</button></a>";
  //  echo "<a href='../index.php'><button type='button'>Home</button></a>";
  header("location:../login.php");

  } else {
    echo "Error " . $sql . ' ' . $connect->connect_error;
  }

  $connect->close();
}

?>