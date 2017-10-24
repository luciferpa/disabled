<?php
@session_start();
if(!isset($_SESSION["s_id"])){
	echo "<script language='javascript'>window.location='index.php';</script>";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require('inc_header.php'); ?>
</head>

<body style="background-color: #4F91CD">
<div class="container-fluid"  style="background-color: #FFFFFF">
<!--body start-->
	<?php require('inc_menu.php'); ?>
	
    <div class="container" style="padding-top:20px;">
    <br><br><br><br><br> 
        <div class="row">
        	<div class="col-xs-12 txt_center">
            	<p class="txt_blue01 txt_bold fz20 lh30">
                		ยินดีต้อนรับ : <?php echo $_SESSION["s_name"]; ?><br>
                		สิทธิการใช้งาน : <?php echo $_SESSION["s_staff_name"]; ?>

              </p>
                <p>

              </p>
            </div>
        </div>
        
 
    </div><!--container-->

   <br><br><br><br><br><br><br><br><br><br><br><br>
   
<!--body end-->
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>