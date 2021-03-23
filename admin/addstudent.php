<?php require_once 'action/db_connect.php'; ?>

<?php include 'include/header.php';?>
<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    
    <?php include 'include/navigation.php';?>

  

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Student</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->


    <?php $sql = "select * from student order by id desc limit 1";


    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
$studentid = $row['id']+1; 


$form_number = "S-20-".$studentid; 

    
     
  
   
?>
    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">





                        <form style="background: white;padding: 30px;border-radius: 10px;" action="action/addstudent_action.php" method="post" enctype="multipart/form-data" class="needs-validation"  novalidate>

    
   <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Register now</h2>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->



    <div class="form-group">
      <label for="form_number">Form Number</label>
      <input type="text" class="form-control" id="form_number" value="<?php echo $form_number; ?>" name="formNumber" required readonly>
    </div>

    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="first_name" pattern="[A-Za-z]{3,}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

  <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="last_name" pattern="[A-Za-z]{3,}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  
   <div class="form-group">
      <label for="fathername">Father Name:</label>
      <input type="text" class="form-control" id="fathername" placeholder="Enter father's name" name="father_name" pattern="[A-Z a-z]{3,}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
    <label for="birthday">Birthday:</label>
    <input type="date" class="form-control" id="birthday"   name="birthday" required>
    <div class="valid-feedback">Valid.</di
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <label class="form-check-label">
        <label for="gender">Gender:</label>
        <div class="form-check">
        <label class="form-check-label"><input type="radio" class="form-check-input" name="gender" value="male">Male </label><br>
        <label class="form-check-label"><input type="radio" class="form-check-input" name="gender" value="female">Female </label><br>
        <label class="form-check-label"><input type="radio" class="form-check-input" name="gender" value="other">Other </label><br><br>
         </div>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>


  <div class="form-group">
      <label for="nationality">Nationality:</label>
      <input type="text" class="form-control" id="nationality" placeholder="Enter nationality" name="nationality" pattern="[A-Za-z]{3,}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  <div class="form-group">
      <label for="domicile">Domicile:</label>
      <input type="text" class="form-control" id="domicile" placeholder="Enter domicile" name="domicile" pattern="[A-Za-z]{3,}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  <div class="form-group">
      <label for="cnic">CNIC/B-Form:</label>
      <input type="text" class="form-control" id="cnic" placeholder="Enter CNIC/B-Form number" name="cnic" pattern="[0-9]{13}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field correctly.</div>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="user_password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="course">Select your Course</label>   
    <select class="form-control" id="course" name="course"  required>    
    <option value="BSCS" >BSCS</option>
    <option value="BSIT" >BSIT</option>
    <option value="MSCS" >MSCS</option>
    <option value="MIT" >MIT</option> 
  </select>
  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>      
<br><hr><h3>Academic Record</h3>
    <hr>
    <div class="form-group">
      <label for="degree">Select Degree Level</label>   
    <select class="form-control"name="degree"  required>    
    <option value="matric" >Matric (or Equivalent)</option>
    <option value="inter" >Intermediate</option>
    <option value="bachelor" >Bachelors</option> 
  </select>
  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>

    <div class="form-group">
      <label for="year">Select Passing Year</label>   
    <select class="form-control" id="year" name="year"  required>    
    <option value="2010" >2010</option>
    <option value="2011" >2011</option>
    <option value="2012" >2012</option>
    <option value="2013" >2013</option>
    <option value="2014" >2014</option>
    <option value="2015" >2015</option>
    <option value="2016" >2016</option>
    <option value="2017" >2017</option>
    <option value="2018" >2018</option>
    <option value="2019" >2019</option>
    <option value="2020" >2020</option>
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>

   <div class="form-group">
      <label for="institute">Institute:</label>
      <input type="text" class="form-control" id="institute" placeholder="Enter institute" name="institute" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="img" name="fileToUpload" placeholder="Upload certificate" required>
      <label class="custom-file-label" for="img">Upload certificate</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>   

 <hr>
    <div class="form-group">
      <label for="degree">Select Degree Level</label>   
    <select class="form-control" id="degree" name="degree2"  required>    
    <option value="matric" >Matric (or Equivalent)</option>
    <option value="inter" >Intermediate</option>
    <option value="bachelor" >Bachelors</option> 
  </select>
</div>

    <div class="form-group">
      <label for="year">Select Passing Year</label>   
    <select class="form-control" id="year" name="year2"  required>    
    <option value="2010" >2010</option>
    <option value="2011" >2011</option>
    <option value="2012" >2012</option>
    <option value="2013" >2013</option>
    <option value="2014" >2014</option>
    <option value="2015" >2015</option>
    <option value="2016" >2016</option>
    <option value="2017" >2017</option>
    <option value="2018" >2018</option>
    <option value="2019" >2019</option>
    <option value="2020" >2020</option>
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>

   <div class="form-group">
      <label for="institute">Institute:</label>
      <input type="text" class="form-control" id="institute" placeholder="Enter institute" name="institute2" pattern="[A-Za-z]{2,}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input"  name="fileToUpload2" required>
      <label class="custom-file-label" for="img">Upload Your certificate</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>   

 <hr>
    <div class="form-group">
      <label for="degree">Select Degree Level</label>   
    <select class="form-control" id="degree" name="degree3"  required>    
    <option value="matric" >Matric (or Equivalent)</option>
    <option value="inter" >Intermediate</option>
    <option value="bachelor" >Bachelors</option> 
  </select>
  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>

    <div class="form-group">
      <label for="year">Select Passing Year</label>   
    <select class="form-control" id="year" name="year3"  required>    
    <option value="2010" >2010</option>
    <option value="2011" >2011</option>
    <option value="2012" >2012</option>
    <option value="2013" >2013</option>
    <option value="2014" >2014</option>
    <option value="2015" >2015</option>
    <option value="2016" >2016</option>
    <option value="2017" >2017</option>
    <option value="2018" >2018</option>
    <option value="2019" >2019</option>
    <option value="2020" >2020</option>
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
</div>

   <div class="form-group">
      <label for="institute">Institute:</label>
      <input type="text" class="form-control" id="institute" placeholder="Enter institute" name="institute3" pattern="[A-Za-z]{2,}" required >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    
    <div class="custom-file mb-3">
      <input type="file" class="custom-file-input"  name="fileToUpload3" required>
      <label class="custom-file-label" for="img">Upload Your certificate</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>   


 

<br><hr><h3>Address Information</h3>
  
  
    <div class="form-group">
      <label for="mail">Mailing address:</label>
      <input type="text" class="form-control" id="mail" placeholder="Enter mail" name="mail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="contact_mail">Contact:</label>
      <input type="text" class="form-control" id="contact_mail" placeholder="Enter Contact" name="contact_mail" pattern="[0-9]{11}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="address">Permanent Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="contact_no">Contact:</label>
      <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact" name="contact_no" pattern="[0-9]{11}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="e_address">Emergency person contact address:</label>
      <input type="text" class="form-control" id="e_address" placeholder="Enter emergency contact person's address" name="e_address" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="contact_e">Emergency Contact:</label>
      <input type="text" class="form-control" id="contact_e" placeholder="Enter Contact" name="contact_e" pattern="[0-9]{11}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="occupation">Father's/Guardian's occupation:</label>
      <input type="text" class="form-control" id="occupation" placeholder="Enter Father's/Guardian's occupation:" name="occupation" pattern="[A-Za-z]{2,}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="income">Father's/Guardian's income:</label>
      <input type="text" class="form-control" id="income" placeholder="Enter Father's/Guardian's income" name="income" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I solemnly declare that I have myself filled this form and the information provided above is correct to the best of my knowledge and belief. If any statement is found false/incorrect my admission may be cancelled.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree with all the terms and conditions.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
    <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();









</script>
   
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