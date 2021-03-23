

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

    <br><br><br><br>
    <div align="center">

<h3>Do you really want to Delete ?</h3>
<form action="action/delete_action.php" method="post">

	<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
	<button type="submit" class="btn btn-primary">Save Changes</button>
	<a href="student_listing.php"><button type="submit" class="btn btn-primary">Back</button></a>
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