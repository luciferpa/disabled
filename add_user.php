<?php
@session_start();
include ("function/connect.php");
if(!isset($_SESSION["s_id"])){
	echo "<script language='javascript'>window.location='index.php';</script>";
}

if(isset($_GET['id'])){  
	
	$query = "
		SELECT *
		FROM logonuser a, tb_limit b
		WHERE a.l_id = b.l_id and a.staff_id = '3' and a.user_status = '1' and a.user_id = '".$_GET['id']."'
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
      <td style="text-align: center;"><h2>จัดการผู้ใช้งาน</h2></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>

<form name="form1" method="post" action="p_add_user.php">      
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" height="40">เลขบัตรประชาชน :</td>
            <td width="87%">
              <input type="hidden" name="txtId" value="<?php if(isset($_GET['id'])){  echo $_GET['id']; } ?>"  />
              <input type="hidden" name="txtMode" value="<?php if(isset($_GET['m'])){  echo $_GET['m']; } ?>" />
              <input type="text" name="txtIdCard" size="100" value="<?php if(isset($_GET['id'])){  echo $row["user_id_card"]; } ?>"  >
              </td>
          </tr>
          <tr>
            <td height="40">คำนำหน้า :</td>
            <td>
				<select name="ddlTitle" style="height: 30px; width: 250px">
<?php
	$query = "
		SELECT * 
		FROM title a
	";
	//echo $query;
	//break;
	$result = mysql_db_query($dbname, $query); 
	while($row_title = mysql_fetch_array($result)){
		$flaq01 = "";
		if(isset($_GET['id'])){  
			if($row["user_title"]==$row_title["title_name"]){
				$flaq01 = "selected";
			}
		} 
?>
					  <option value="<?php echo $row_title["title_name"]; ?>" <?php echo $flaq01; ?> ><?php echo $row_title["title_name"]; ?></option>
<?php
    }
?>
				</select>
            </td>
          </tr>
          <tr>
            <td height="40">ชื่อ :</td>
            <td><input type="text" name="txtName" size="100" value="<?php if(isset($_GET['id'])){  echo $row["user_name"]; } ?>"  ></td>
          </tr>
          <tr>
            <td height="40">นามสกุล :</td>
            <td><input type="text" name="txtSurName" size="100" value="<?php if(isset($_GET['id'])){  echo $row["user_surname"]; } ?>"  ></td>
          </tr>
          <tr>
            <td height="40">โทรศัพท์ :</td>
            <td><input type="text" name="txtTel" size="100" value="<?php if(isset($_GET['id'])){  echo $row["user_tel"]; } ?>"  ></td>
          </tr>
          <tr>
            <td height="40">Email :</td>
            <td><input type="text" name="txtEmail" size="100" value="<?php if(isset($_GET['id'])){  echo $row["user_email"]; } ?>"  ></td>
          </tr>
          <tr>
            <td height="40">Password :</td>
            <td><input type="password" name="txtPass" size="100" value="<?php if(isset($_GET['id'])){  echo $row["user_pass"]; } ?>"  ></td>
          </tr>
          <tr>
            <td height="40">RePassword :</td>
            <td>
              <input type="password" name="txtPass2" size="100" value="<?php if(isset($_GET['id'])){  echo $row["user_pass"]; } ?>"  > 
              </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
              <input type="submit" name="btnSave" value="  บันทึก  " >
              &nbsp;&nbsp;&nbsp;
              <input type="reset" name="btnReset" value="  ยกเลิก  " onClick="window.location='mgr_user.php';">
              
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