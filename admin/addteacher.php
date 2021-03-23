
<?php include 'include/header.php';?>
<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    
    <?php include 'include/navigation.php';?>

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Teacher</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
    
   

    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form style="background: white;padding: 30px;border-radius: 10px;" action="action/addteacher_action.php" method="post" enctype="multipart/form-data" class="needs-validation"  novalidate>
                
                      <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=='already-exists'){ ?>
                                            
                                                                  
                       <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>Error!</strong> CNIC already registered 
                        </div>
                        <?php } ?> 

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
                            <label for="cnic">CNIC/B-Form:</label>
                            <input type="text" class="form-control" id="cnic" placeholder="Enter CNIC/B-Form number" name="cnic" pattern="[0-9]{13}" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field properly (no characters/space).</div>
                          </div>
                                                   
                          <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="first_name" pattern="[A-Za-z]{3,}" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field properly (no numbers/characters/Minimun 3 letters).</div>
                          </div>

                        <div class="form-group">
                            <label for="lastname">Last Name:</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="last_name" pattern="[A-Za-z]{3,}" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field properly (no numbers/characters/Minimun 3 letters)</div>
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
                            <input type="text" class="form-control" id="nationality" placeholder="Enter nationality" name="nationality" pattern="[A-Za-z]{2,}"" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field properly (no numbers/characters/minimum 2 letters).</div>
                          </div>
                          
                          <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" pattern="[A-Za-z]{2,}" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field properly (no numbers/characters/minimum 2 letters).</div>
                          </div>   
                          
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field correctly properly (email@address.etc).</div>
                          </div>
                          
                          <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact_no" pattern="[0-9]{11}" required>
                            <div class="valid-feedback"  >Valid.</div>
                            <div class="invalid-feedback">Please fill out this field correctly properly (no alphabets/characters/extra numbers).</div>
                          </div>
                          
                          <label class="form-check-label">
                              <label for="marital" >Marital Status:</label>
                              <div class="form-check">
                              <label class="form-check-label"><input type="radio" class="form-check-input" name="marital" value="Single">Single </label><br>
                              <label class="form-check-label"><input type="radio" class="form-check-input" name="marital" value="Married">Married </label><br>
                              <label class="form-check-label"><input type="radio" class="form-check-input" name="marital" value="Divorced/Separated">Divorced/Separated </label><br>
                              <label class="form-check-label"><input type="radio" class="form-check-input" name="marital" value="Widow/Widower">Widow/Widower</label><br><br>
                               </div>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Check this checkbox to continue.</div>
                            </label>

                           <div class="form-group">
                            <label for="course">What is the highest level of education you have attained?</label>   
                          <select class="form-control" id="course" name="edu_level"  required>    
                          <option value="" >select</option>
                          <option value="Matric" >Matric</option>
                          <option value="Intermediate" >Intermediate</option>
                          <option value="Graduation" >Graduation</option>
                          <option value="Masters" >Masters</option>
                          <option value="MS/MPhil" >MS/MPhil</option>
                          <option value="PhD" >PhD</option>
                          <option value="Post Doctorate" >Post Doctorate</option> 
                          </select>
                           </div> 

                            <div class="form-group">
                            <label for="course">What is your current occupation status?</label>   
                          <select class="form-control" id="course" name="occupation"  required>    
                          <option value="" >select</option>
                          <option value="Full Time" >Full Time</option>
                          <option value="Part Time" >Part Time</option>
                          <option value="Casual" >Casual</option>
                          <option value="Retired" >Retired</option>
                          <option value="Unemployed" >Unemployed</option>
                          </select>
                           </div> 

                           <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="cv" name="fileToUpload">
                            <label class="custom-file-label" for="cv">Upload Your CV</label>
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