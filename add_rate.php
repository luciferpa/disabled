<?php
@session_start();
if(!isset($_SESSION["s_id"])){
	echo "<script language='javascript'>window.location='index.php';</script>";
}

if(isset($_GET['id'])){  
	include ("function/connect.php");
	$query = "
		SELECT * 
		FROM money_rate a
		WHERE a.m_no = '".$_GET['id']."'
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
      <td style="text-align: center;"><h2>จัดการอัตราเบี้ยผู้พิการ</h2></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>

<form name="form1" method="post" action="p_add_rate.php">      
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="40">อัตราเบี้ยผู้พิการ/เดือน :</td>
            <td width="87%">
            	<input type="hidden" name="txtId" value="<?php if(isset($_GET['id'])){  echo $_GET['id']; } ?>"  />
              	<input type="hidden" name="txtMode" value="<?php if(isset($_GET['m'])){  echo $_GET['m']; } ?>" />
            	<input type="text" name="txtRate" size="100" value="<?php if(isset($_GET['id'])){  echo $row["m_rate"]; } ?>"  >
            </td>
          </tr>
          <tr>
            <td height="40">สถานะ :</td>
            <td>
				<select name="ddlStatus" style="height: 30px; width: 250px">
					<option value="1" <?php if(isset($row["m_status"]) && $row["m_status"]=='1'){  echo 'selected'; } ?>>ใช้</option>
					<option value="0" <?php if(isset($row["m_status"]) && $row["m_status"]=='0'){  echo 'selected'; } ?>>ไม่ใช้</option>
				</select> 
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="submit" name="btnSave" value="  บันทึก  " >
              &nbsp;&nbsp;&nbsp;
              <input type="reset" name="btnReset" value="  ยกเลิก  " onClick="window.location='mgr_rate.php';">
              
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