<?php 

require_once 'action/db_connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM student WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<?php include 'include/header.php';?>
<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    
    <?php include 'include/navigation.php';?>

<div class="container">
  <h2>Edit</h2>
  <form action="action/edit_action.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter first name" value="<?php echo $data['first_name'] ?>" name="first_name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" value="<?php echo $data['last_name'] ?>" name="last_name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" value="<?php echo $data['email'] ?>" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="Contact">Contact</label>
      <input type="text" class="form-control" id="Contact" placeholder="Enter Contact" value="<?php echo $data['contact_no'] ?>" name="contact_no" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter pwd" value="<?php echo $data['user_password'] ?>" name="user_password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div> 
    <input type="hidden" name="id" value="<?php echo $data['id']?>" />	
    <button type="submit" class="btn btn-primary">Save Changes</button>
    <a href="student_listing.php"><button type="submit" class="btn btn-primary">Back</button></a>
    </div>

    </form>
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