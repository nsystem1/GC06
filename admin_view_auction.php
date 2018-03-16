<?php
  session_start();
  if(!isset($_SESSION['is_admin'])) {
    header("Location: index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
  <?php include ('template/include_files.php');?>
  <script type="text/javascript" src="js/dog_watcher.js"></script>
  <script type="text/javascript">
      $( document ).ready(function() {
        dogwatcher();
      });
  </script>
  <?php include ('connection.php');
  ?>
</head>

<body>
 <div class="container">
   <?php include ('template/navbar.php');?>
   <?php if(isset($_SESSION['is_bid_success'])) {?>
     <div style="display:block" id="success-info" class="alert alert-success" role="alert"><?php echo $_SESSION['is_bid_success'];?></div>
   <?php unset($_SESSION['is_bid_success']); } else if(isset($_SESSION['is_bid_error'])) {?>
     <div style="display:block" id="danger-info" class="alert alert-danger" role="alert"><?php echo $_SESSION['is_bid_error'];?></div>
   <?php unset($_SESSION['is_bid_error']);}?>
   <div style="display:none" id="success-info" class="alert alert-success" role="alert"></div>
   <div style="display:none" id="danger-info" class="alert alert-danger" role="alert"></div>
   <br>
   <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Administrator Account Dashboard</h1>
      <h2 class="jumbotron-heading">Current Auction</h2>
		  <p class="lead text-muted">Choose from below to view current auction.</p>
  		  <p>
    			<a class="btn btn-outline-success btn-lg" href="#listed_items_btn" >View Current Auction Listings</a>
    			<p class="lead text-muted"></p>
    			<a class="btn btn-outline-success btn-lg" href="#bid_items_btn" >View Current Bids</a>
    			<p class="lead text-muted"></p>
  		  </p>
    	</div>
    </section>



<div id="listed_items_btn"></div>

<div class="container">

<?php include './phpadmin/admin_listed_items_list.php'; ?>

</div>



<div id="bid_items_btn"></div>

<div class="container">

<?php include './phpadmin/admin_bids_list.php'; ?>

</div>







</body>
</html>
