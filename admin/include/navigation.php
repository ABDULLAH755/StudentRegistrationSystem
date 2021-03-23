

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <div class="header_top">
            
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="50px" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="images/mail_icon.png" alt="#" />eduportal@gmail.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="images/phone_icon.png" alt="#" />+9200000000</a></li>
                            


                            <?php
    
      if (isset($_SESSION['user']) && $_SESSION['user']!=''){ ?>
        
     <li><a class="join_bt" href="logout.php">Log out</a></li>

        
     <?php }  else { ?>
      
        <li><a class="join_bt" href="login.php">Log in</a></li>

    
       <?php } ?>
                      <?php  $pageName2 =  basename($_SERVER['PHP_SELF']);  
                        
                
                        ?>





                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #ff880e;">
                   



                <nav class="navbar header-nav navbar-expand-lg"> 
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav" >
                        <li><a class="nav-link " href="../index.php">Home</a></li>
                        <li><a class="nav-link" href="../about.php">About</a></li>
                        
                  <?php if(!isset($_SESSION['user']) || $_SESSION['user']==''){ ?>
                        <?php if($pageName2 == 'addstudent.php' || $pageName2 == 'addteacher.php' ){?>

                                    <li class="nav-item dropdown"><a class="nav-link active  dropdown-toggle" data-toggle="dropdown" href="#">Registration</a>
                                        <div class="dropdown-menu">
                                             <a class="dropdown-item" href="addteacher.php">Teacher</a>
                                             <a class="dropdown-item" href="addstudent.php">Student</a>
                                         </div>
                                    </li>

                          <?php } else { ?>

                                     <li class="nav-item dropdown"><a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#">Registration</a>
                                      <div class="dropdown-menu">
                                             <a class="dropdown-item" href="addteacher.php">Teacher</a>
                                             <a class="dropdown-item" href="addstudent.php">Student</a>
                                         </div>
                                     </li>
                          <?php } ?>

                       <li><a class="nav-link" href="../services.php">Services</a></li>
                        <li><a class="nav-link" href="../faculty.php">Faculty</a></li>
                    <?php } ?>
                    
              <?php   if(isset($_SESSION['user'])){         
                      $role = $_SESSION['user']['role'];
                      $id = $_SESSION['user']['id'];
                       if($role==2){?>

                         <?php if($pageName2 == 'addstudent.php' || $pageName2 == 'addteacher.php' ){?>

                                    <li class="nav-item dropdown"><a class="nav-link active  dropdown-toggle" data-toggle="dropdown" href="#">Registration</a>
                                        <div class="dropdown-menu">
                                             <a class="dropdown-item" href="addteacher.php">Teacher</a>
                                             <a class="dropdown-item" href="addstudent.php">Student</a>
                                         </div>
                                    </li>

                          <?php } else { ?>

                                     <li class="nav-item dropdown"><a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#">Registration</a>
                                      <div class="dropdown-menu">
                                             <a class="dropdown-item" href="addteacher.php">Teacher</a>
                                             <a class="dropdown-item" href="addstudent.php">Student</a>
                                         </div>
                                     </li>
                          <?php } ?>



                                  <?php if($pageName2 == 'faculty_listing.php'){?>

                                    <li><a class="nav-link active" href="faculty_listing.php">Faculty list</a></li>
                          <?php } else { ?>

                                     <li><a class="nav-link" href="faculty_listing.php">Faculty list</a></li>
                          <?php } ?>

              <?php } ?>

                      







                      <?php if(isset($_SESSION['user']) && $_SESSION['user']!=''){ ?>



                        
                                  <?php if($pageName2 == 'student_listing.php'){?>

                                    <li><a class="nav-link active" href="student_listing.php">Student list</a></li>
                          <?php } else { ?>

                                     <li><a class="nav-link" href="student_listing.php">Student list</a></li>
                          <?php } ?>



                      <?php } }?>  
                        
                    </ul>
                </div>
                     </div>
                 </nav>
                
                </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          $('.navbar-nav .nav-link').click(function(){
    $('.navbar-nav .nav-link').removeClass('active');
    $(this).addClass('active');
})
        </script>
    </header>
    <!-- End header -->