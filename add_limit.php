<?php
@session_start();
if(!isset($_SESSION["s_id"])){
	echo "<script language='javascript'>window.location='index.php';</script>";
}

if(isset($_GET['id'])){  
	include ("function/connect.php");
	$query = "
		SELECT * 
		FROM tb_limit a
		WHERE a.l_id = '".$_GET['id']."'
	";
	//echo $query;
	//break;
	$result = mysql_db_query($dbname, $query); 
	$row = mysql_fetch_array($result);				   
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
	<?php require('inc_menu.php'); ?><!--container-->


<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="50">&nbsp;</td>
      <td style="text-align: right;">ยินดีต้อนรับ : <?php echo $_SESSION["s_name"]; ?> &nbsp;&nbsp;สิทธิการใช้งาน : <?php echo $_SESSION["s_staff_name"]; ?></td>
      <td width="50">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="text-align: center;"><h2>จัดการสำนักงานเขต</h2></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>

<form name="form1" method="post" action="p_add_limit.php">      
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="40">รหัสสำนักงานเขต :</td>
            <td width="87%">
            	<input type="hidden" name="txtId" value="<?php if(isset($_GET['id'])){  echo $_GET['id']; } ?>"  />
              	<input type="hidden" name="txtMode" value="<?php if(isset($_GET['m'])){  echo $_GET['m']; } ?>" />
            	<input type="text" name="txtCode" size="100" value="<?php if(isset($_GET['id'])){  echo $row["l_code"]; } ?>"  >
            </td>
          </tr>
          <tr>
            <td height="40">ชื่อสำนักงานเขต :</td>
            <td>
             	<input type="text" name="txtName" size="100" value="<?php if(isset($_GET['id'])){  echo $row["l_name"]; } ?>"  > 
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="submit" name="btnSave" value="  บันทึก  " >
              &nbsp;&nbsp;&nbsp;
              <input type="reset" name="btnReset" value="  ยกเลิก  " onClick="window.location='mgr_limit.php';">
              
              </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          </table>
</form>
      	
      	
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>



<!--body end-->
</div>
<?php require('inc_footer.php'); ?>
</body>
</html>