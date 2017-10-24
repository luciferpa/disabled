<meta charset="utf-8">
<?php 	
		@session_start();

		include ("function/connect.php"); 

		$user = $_POST['txtEmail'];
		$pass = $_POST['txtPass'];
		
		//echo $user.' '.$pass;
		//break;
		
		if ($user == "" or $pass == "")
		{
			echo "<script language='javascript'> alert('อีเมล์และรหัสผ่านไม่ถูกต้อง !'); window.location='index.php'; </script>";
		}
		else
		{
			$query = "
				SELECT * 
				FROM logonuser a, staff_type b
				WHERE a.staff_id = b.staff_id and a.user_email = '".$user."'
			";
			//echo $query;
			//break;
			$result = mysql_db_query($dbname, $query); 
			$row = mysql_fetch_array($result);

			$passtrue = $row['user_pass'];
			
			if ($pass==$passtrue)
			{
			// session
						
				$_SESSION["s_id"] = $row["user_id"];
				$_SESSION["s_name"] = $row["user_name"].' '.$row["user_surname"];
				$_SESSION["s_staff"] = $row["staff_id"];
				$_SESSION["s_staff_name"] = $row["staff_name"];

				echo '<meta  http-equiv="refresh" content="0;url=main.php">';	 
							
			}else{
				echo "<script language='javascript'> alert('อีเมล์และรหัสผ่านไม่ถูกต้อง !'); window.history.back(); </script>";	
			}
		
		}
 ?>

