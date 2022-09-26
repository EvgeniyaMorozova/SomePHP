<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>

<body>
<?php
$ip =  $_SERVER['REMOTE_ADDR'];
require('connect.php');


?>
    <div class="container clearfix">
        <div class="people-list" id="people-list">
          <div class="search">
            <input type="text" placeholder="search" />
            <i class="fa fa-search"></i>
          </div>
         <?php include('user_list.php'); ?>
        </div>
        
       <?php include("chat_div.php"); ?>
        
      </div> <!-- end container -->
    
  <?php //include('some_code'); ?>
    <script src="jquery-3.6.0.js"></script>
   <!-- <script src="chat.js"></script> -->
 <?php include("update_ip.php"); ?>
</body>
</html>