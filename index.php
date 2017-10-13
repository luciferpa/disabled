<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require('inc_header.php'); ?>

<!-- Demo CSS -->
	<link rel="stylesheet" href="slide_gallery/demo/css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="slide_gallery/flexslider.css" type="text/css" media="screen" />

</head>

<body>

<div class="container-fluid">
	
   <?php require('inc_menu.php'); ?>
	
    <div class="container" style="padding-top:20px;">
    
     
        <div class="row">
        	<div class="col-xs-12 txt_center">
            	<p class="txt_blue01 txt_bold fz20 lh30">
                	Login
              </p>
                <p>
<form action="p_login.php" method="post" name="form1" >                
                	User : <input type="text" name="txtUser">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Password : <input type="text" name="txtUser"><br><br>
					<input name="submit" type="button" title="Login" value="&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<input type="reset" name="reset" value="&nbsp;&nbsp;&nbsp;Reset&nbsp;&nbsp;&nbsp;" />
</form>
              </p>
            </div>
        </div>
        
        
        

     
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br>   
    </div><!--container-->

   
   
   <?php require('inc_footer.php'); ?>
   


</body>
</html>