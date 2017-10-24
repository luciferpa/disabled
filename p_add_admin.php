<?php
@session_start();	
include ("function/connect.php"); 

if(isset($_POST["txtMode"]) && $_POST["txtMode"]=='add'){
		
	if (!isset($_POST["txtIdCard"]) || $_POST["txtIdCard"]=="" 
		|| !isset($_POST["txtName"]) || $_POST["txtName"]==""
		|| !isset($_POST["txtSurName"]) || $_POST["txtSurName"]==""
		|| !isset($_POST["txtTel"]) || $_POST["txtTel"]==""
		|| !isset($_POST["txtEmail"]) || $_POST["txtEmail"]==""
		|| !isset($_POST["txtPass"]) || $_POST["txtPass"]==""
		|| !isset($_POST["txtPass2"]) || $_POST["txtPass2"]=="")
	{
		echo "<script language='javascript'> alert('กรุณากรอกข้อมูลให้ครบ !'); window.history.back(); </script>";
	}
	else if($_POST["txtPass"] <> $_POST["txtPass2"]){
		echo "<script language='javascript'> alert('รหัสผ่านไม่ถูกต้อง !'); window.history.back(); </script>";
	}
	else
	{		
		//check email
		$query = "
		SELECT *
		FROM logonuser a, tb_limit b
		WHERE a.l_id = b.l_id and a.user_status = '1' and a.user_email = '".$_POST["txtEmail"]."'
		";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 
		$row_email = mysql_fetch_array($result);
		if($row_email["user_id"] <> ""){
			echo "<script language='javascript'> alert('Email นี้มีผู้ใช้งานแล้ว !'); window.history.back(); </script>";
		}else{
			//Save Data
			$query = "insert into logonuser ( user_id_card, staff_id, user_title, user_name,
			user_surname, l_id, user_tel, user_email, 
			user_pass, user_status)
			VALUES ( '".$_POST["txtIdCard"]."', '2', '".$_POST["ddlTitle"]."', '".$_POST["txtName"]."', 
			'".$_POST["txtSurName"]."', '".$_POST["ddlLimit"]."', '".$_POST["txtTel"]."', '".$_POST["txtEmail"]."',
			'".$_POST["txtPass"]."', '1' )";
			//echo $query;
			//break;
			$result = mysql_db_query($dbname, $query); 	
			MYSQL_CLOSE();

			echo "<script language='javascript'> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
			echo "<meta  http-equiv='refresh' content='0;url=mgr_admin.php'>";
		}
		
		
	}	
}else if(isset($_POST["txtMode"]) && $_POST["txtMode"]=='edit'){
	if($_POST["txtPass"] <> $_POST["txtPass2"]){
		echo "<script language='javascript'> alert('รหัสผ่านไม่ถูกต้อง !'); window.history.back(); </script>";
	}else{
		$query = " update logonuser set 
		user_id_card = '".$_POST["txtIdCard"]."',
		user_title = '".$_POST["ddlTitle"]."',
		user_name = '".$_POST["txtName"]."',
		user_surname = '".$_POST["txtSurName"]."',
		l_id = '".$_POST["ddlLimit"]."',
		user_tel = '".$_POST["txtTel"]."',
		user_email = '".$_POST["txtEmail"]."',
		user_pass = '".$_POST["txtPass"]."'
		where user_id ='".$_POST["txtId"]."' ";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 	
				
		echo "<script language='javascript'> alert('แก้ไขข้อมูลเรียบร้อย'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_admin.php'>";
	}
				
}else if(isset($_GET["m"]) && $_GET["m"]=="delete"){
		$query = " 
			update logonuser set 
			user_status = '0'
			where user_id ='".$_GET["id"]."' 
		";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 	
				
		echo "<script language='javascript'> alert('ลบข้อมูลเรียบร้อย'); </script>";
		echo "<meta  http-equiv='refresh' content='1;url=mgr_admin.php'>";
}else{
		echo "<script language='javascript'> alert('ข้อมูลผิดพลาด โปรดทำรายการใหม่'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_admin.php'>";
}
	
?>