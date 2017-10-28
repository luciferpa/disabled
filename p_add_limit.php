<meta charset="utf-8">
<?php
@session_start();	
include ("function/connect.php"); 

if(isset($_POST["txtMode"]) && $_POST["txtMode"]=='add'){
		
	if (!isset($_POST["txtCode"]) || $_POST["txtCode"]=="" 
		|| !isset($_POST["txtName"]) || $_POST["txtName"]=="")
	{
		echo "<script language='javascript'> alert('กรุณากรอกข้อมูลให้ครบ !'); window.history.back(); </script>";
	}
	else
	{		
			
		//Save Data
		$query = "insert into tb_limit ( l_code, l_name, l_status )
		VALUES ( '".$_POST["txtCode"]."','".$_POST["txtName"]."','1' )";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 	
		MYSQL_CLOSE();
			
		echo "<script language='javascript'> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_limit.php'>";

		
	}	
}else if(isset($_POST["txtMode"]) && $_POST["txtMode"]=='edit'){

		$query = " update tb_limit set 
		l_code = '".$_POST["txtCode"]."',
		l_name = '".$_POST["txtName"]."'
		where l_id ='".$_POST["txtId"]."' ";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 	
				
		echo "<script language='javascript'> alert('แก้ไขข้อมูลเรียบร้อย'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_limit.php'>";
				
}else if(isset($_GET["m"]) && $_GET["m"]=="delete"){
		$query = " 
			update tb_limit set 
			l_status = '0'
			where l_id ='".$_GET["id"]."' 
		";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 	
				
		echo "<script language='javascript'> alert('ลบข้อมูลเรียบร้อย'); </script>";
		echo "<meta  http-equiv='refresh' content='1;url=mgr_limit.php'>";
}else{
		echo "<script language='javascript'> alert('ข้อมูลผิดพลาด โปรดทำรายการใหม่'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_limit.php'>";
}
	
?>