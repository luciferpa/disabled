<?php
@session_start();
if(isset($_SESSION["s_id"]) && $_SESSION["s_id"] >0){
	echo "<script language='javascript'>window.location='main.php';</script>";
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
                	Login
              </p>
                <p>
					<form action="p_login.php" method="post" name="form1" >                
						Email : <input type="text" name="txtEmail">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Password : <input type="password" name="txtPass"><br><br>
						<input type="submit" name="submit" title="Login" value="&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" name="reset" value="&nbsp;&nbsp;&nbsp;Reset&nbsp;&nbsp;&nbsp;" />
					</form>
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