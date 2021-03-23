<?php 

require_once 'db_connect.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "DELETE from student WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		/*echo "<p>Successfully removed!!</p>";
		echo "<a href='../sign_up_listing.php'><button type='button'>Back</button></a>";*/
session_start();

$role = $_SESSION['user']['role'];

if($role==2){
		header("location:../student_listing.php");
} else {
		header("location:../logout.php");
}



	} else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();
}

?>