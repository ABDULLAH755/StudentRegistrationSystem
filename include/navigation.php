

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
        
     <li><a class="join_bt" href="admin/logout.php">Log out</a></li>

        
     <?php }  else { ?>
      
        <li><a class="join_bt" href="admin/login.php">Log in</a></li>

    
       <?php } ?>


                        <?php   $pageName =  basename($_SERVER['PHP_SELF']);  
                        
                
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
                    <ul class="navbar-nav">

                <?php if($pageName == 'index.php'){?>

                          <li><a class="nav-link active" href="index.php">Home</a></li>
                <?php } else { ?>

                           <li><a class="nav-link" href="index.php">Home</a></li>
                <?php } ?>





                <?php if($pageName == 'about.php'){?>

                        <li><a class="nav-link active" href="about.php">About</a></li>
                        
                  <?php } else { ?>

                        <li><a class="nav-link" href="about.php">About</a></li>
                <?php } ?>




                  <?php if(!isset($_SESSION['user']) || $_SESSION['user']==''){ ?>
                       <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="register.php">Registration</a>
                               <div class="dropdown-menu">
                                   <a class="dropdown-item" href="admin/addteacher.php">Teacher</a>
                                   <a class="dropdown-item" href="admin/addstudent.php">Student</a>
                               </div>
                        </li>


                        <?php if($pageName == 'services.php'){?>

                          <li><a class="nav-link active" href="services.php">Services</a></li>
                <?php } else { ?>

                           <li><a class="nav-link" href="services.php">Services</a></li>
                <?php } ?>




                        <?php if($pageName == 'faculty.php'){?>

                          <li><a class="nav-link active" href="faculty.php">Faculty</a></li>
                <?php } else { ?>

                           <li><a class="nav-link" href="faculty.php">Faculty</a></li>
                <?php } ?>

               
               

                    <?php } ?>
                    
              <?php   if(isset($_SESSION['user'])){         
                      $role = $_SESSION['user']['role'];
                      $id = $_SESSION['user']['id'];
                       if($role==2){?>
                        <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="register.php">Registration</a>
                               <div class="dropdown-menu">
                                   <a class="dropdown-item" href="admin/addteacher.php">Teacher</a>
                                   <a class="dropdown-item" href="admin/addstudent.php">Student</a>
                               </div>
                        </li>
                        <li><a class="nav-link" href="admin/faculty_listing.php">Faculty list</a></li>  
                       <?php } ?>

                      <?php if(isset($_SESSION['user']) && $_SESSION['user']!=''){ ?>

                        
                        <li><a class="nav-link" href="admin/student_listing.php">Student List</a></li>

                      <?php } }?>  
                        
                    </ul>
                </div>
                     </div>
                 </nav>
                 <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="images/search_icon.png" alt="#" />
                    </a>
                </div> 
                </div>
            </div>
          </div>
        </div>
        
    </header>
    <!-- End header -->