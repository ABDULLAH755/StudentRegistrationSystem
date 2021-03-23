
<?php include 'security.php'; ?>
<?php require_once 'action/db_connect.php'; ?>



<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>EduPortal</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    
    <?php include 'include/navigation.php';?>



<div class="container">
<br><br>

<div class="manageUser">

  <h2>User List</h2>


  <?php   if(isset($_SESSION['user'])){         
                      $role = $_SESSION['user']['role'];
                      $id = $_SESSION['user']['id'];
                       if($role==2){?>
                        <a href="addstudent.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-create"></span>Create</a>
                       <?php } ?>
                       <?php } ?>




  
  </div>





  <table class="table table-hover">
    <thead>
      <tr>

        <th>Form#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php

       $role = $_SESSION['user']['role'];
       $id = $_SESSION['user']['id'];

 if($role==2){
            $sql = "SELECT * FROM student LEFT JOIN student_qualification on student.id = student_qualification.sid ";
      } else{

            $sql = "SELECT * FROM student LEFT JOIN student_qualification on student.id = student_qualification.sid where student.id = '".$id."'   ";

      }
 //     echo $sql; exit;
//      $sql = "SELECT * FROM student LEFT JOIN student_qualification on student.id = student_qualification.sid ";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {   ?>
       <tr>
            <td><?php echo $row['form_number'];?></td>
            <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
           <td>
             <a href="edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-edit"></span>Edit</a>

             <a href="delete.php?id=<?php echo  $row['id']; ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-remove-circle"></span>Delete</a>
           </td>
          </tr>
      <?php   } ?>
    </tbody>
  </table>
</div>


</div>
    <?php include 'include/footer.php';?>
    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
  
</body>

</html> 
<?php
}
?>