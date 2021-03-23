<?php 

require_once 'db_connect.php';

if($_POST) {
    $cnic = $_POST['cnic'];
    
    $sql = "select * from teacher where cnic='".$cnic."' ";
    
    $query= mysqli_query($connect, $sql);
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
 
    $count= mysqli_num_rows($query);
    if($count>0){
      header('location:../addteacher.php?msg=already-exists');
    
   
    $connect->close();}
}
else
?>













<?php
$target_dir = "../uploads/CV/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "pdf" && $imageFileType != "doc"
&& $imageFileType != "docx" ) {
  echo "Sorry, only JPG, PDF, DOC & DOCX files are allowed.";
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
require_once 'db_connect.php';

if($_POST) {
  $cnic = $_POST['cnic'];
	$first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $gender = $_POST['gender'];
  $nationality = $_POST['nationality'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $contact_no = $_POST['contact_no'];
  $marital = $_POST['marital'];
  $edu_level = $_POST['edu_level'];
  $occupation = $_POST['occupation'];
  $cv = $_FILES["fileToUpload"]["name"];
  

	$sql = "INSERT INTO teacher (`cnic`, `first_name`, `last_name`, `gender`, `nationality`, `city`,  `email`, `contact_no`, `marital`, `edu_level`, `occupation`, `cv`) VALUES ('".$cnic."', '".$first_name."', '".$last_name."', '".$gender."', '".$nationality."', '".$city."', '".$email."', '".$contact_no."', '".$marital."', '".$edu_level."', '".$occupation."', '".$cv."')";
	if($connect->query($sql) === TRUE) {
		//echo "<p>New Record Successfully Created</p>";
		//echo "<a href='../sign_up.php'><button type='button'>Back</button></a>";
	//	echo "<a href='../index.php'><button type='button'>Home</button></a>";
	header("location:../index.php?msg=THANK-YOU-FOR-REGISTERING");

	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>