<?php 

require_once 'db_connect.php';

if($_POST) {
    $email = $_POST['email'];
    $user_password = $_POST['user_password'];
    
    $sql = "select * from student where email='".$email."' and user_password= '".$user_password."' ";
    
    $query= mysqli_query($connect, $sql);
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
 
    $count= mysqli_num_rows($query);
    if($count>0){
        session_start();
    //$_SESSION['user']=  $_POST['email'];
    
    $_SESSION['user']= $row;
    //    $_SESSION['role']= $row['role'];


// $role = $_SESSION['student']['role'];
// $id = $_SESSION['student']['id'];

// if($role==2){
//     $sql = "select * from student";
// } else{

  // $sql = "select * from student where id = $id ";
// }


    header('location:../index.php?msg=success');
    }
    else{
        header('location:../login.php?msg=invalid_user');
    }
   
    $connect->close();
}

?>