<?php 

require_once 'db_connect.php';

if($_POST) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$user_password = $_POST['user_password'];

	$id = $_POST['id'];

	$sql  = "UPDATE student SET first_name = '$first_name', last_name = '$last_name', email = '$email', contact_no = '$contact_no',                      user_password = '$user_password' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		/*echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='../sign_up_listing.php'><button type='button'>Home</button></a>";*/
		header("location:../student_listing.php");
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>