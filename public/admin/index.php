<?php 
require_once('../../includes/includes_admin.php');

 if(!$session->is_logged_in())
 //if not logged in then redirect to login page 
 	redirect_to('login.php');
 if(isset($_POST['logout'])){
 	   #doing log action after logging in 
       #have to do it before really logged out so that we can get data
 	 log_action("logged out ",$session->user_id);
    $session->logout();
   
    redirect_to('login.php');
 }
 if(isset($_POST['log'])){
     redirect_to('logfile.php');
 }
?>
 <?php include_once('../layouts/admin_header.php') ?>


    <h2 class="main-heading">Menu</h2>
     
    
    <form method="post" action="index.php">
    	<!--the value $_POST['logout'] will be set when logout button will be clicked -->
    	<input type="submit" name="logout" value="Logout">
    	&nbsp;
    	<!--the value $_POST['clear-log'] will be set when cleag-log button will be clicked -->
    	
    	<input type="submit" name="log" value="Logs">

    </form>

    
 <?php include_once('../layouts/admin_footer.php') ?>