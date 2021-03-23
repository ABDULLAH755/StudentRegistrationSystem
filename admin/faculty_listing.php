<?php require_once 'action/db_connect.php'; ?>


<?php include 'include/header.php';?>
<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    
    <?php include 'include/navigation.php';?>



<div class="container">
<br><br>

<div class="manageUser">

  <h2>Faculty</h2>
    <!-- End Banner -->



  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Qualification</th>
      </tr>
    </thead>
    <tbody>
      <?php


      $sql = "SELECT * FROM teacher";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {   ?>
       <tr>
            <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
           <td>
             <?php echo $row['edu_level']; ?>
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