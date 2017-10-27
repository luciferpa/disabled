<?php
@session_start();	
include ("function/connect.php"); 

if(isset($_POST["txtMode"]) && $_POST["txtMode"]=='add'){
		
	if (!isset($_POST["txtRate"]) || $_POST["txtRate"]=="" 
		|| !isset($_POST["ddlStatus"]) || $_POST["ddlStatus"]=="")
	{
		echo "<script language='javascript'> alert('กรุณากรอกข้อมูลให้ครบ !'); window.history.back(); </script>";
	}
	else
	{		
		if($_POST["ddlStatus"] == '1'){ //เคลียร์สถานะเดิมออก
			$query = " update money_rate set 
			m_status = '0'
			where m_status ='1' ";
			$result = mysql_db_query($dbname, $query); 
		}
			
		//Save Data
		$query = "insert into money_rate ( m_rate, m_status )
		VALUES ( '".$_POST["txtRate"]."','".$_POST["ddlStatus"]."' )";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 	
		MYSQL_CLOSE();
			
		echo "<script language='javascript'> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_rate.php'>";

		
	}	
}else if(isset($_POST["txtMode"]) && $_POST["txtMode"]=='edit'){

		if($_POST["ddlStatus"] == '1'){ //เคลียร์สถานะเดิมออก
			$query = " update money_rate set 
			m_status = '0'
			where m_status ='1' ";
			$result = mysql_db_query($dbname, $query); 
		}
	
		//update
		$query = " update money_rate set 
		m_rate = '".$_POST["txtRate"]."',
		m_status = '".$_POST["ddlStatus"]."'
		where m_no ='".$_POST["txtId"]."' ";
		//echo $query;
		//break;
		$result = mysql_db_query($dbname, $query); 	
				
		echo "<script language='javascript'> alert('แก้ไขข้อมูลเรียบร้อย'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_rate.php'>";
				
}else{
		echo "<script language='javascript'> alert('ข้อมูลผิดพลาด โปรดทำรายการใหม่'); </script>";
		echo "<meta  http-equiv='refresh' content='0;url=mgr_rate.php'>";
}
	
?>