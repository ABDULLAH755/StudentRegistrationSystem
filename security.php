<?php  session_start(); ?>
    <?php
		
		  if(!isset($_SESSION['user']) && $_SESSION['user']==''){ 
			  header('location:login.php?msg=whatsupdude');
			  exit;
		  
	      } ?>
  