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
	<?php require('inc_menu.php'); ?><!--container-->


<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="50px">&nbsp;</td>
      <td style="text-align: right;">ยินดีต้อนรับ : <?php echo $_SESSION["s_name"]; ?> &nbsp;&nbsp;สิทธิการใช้งาน : <?php echo $_SESSION["s_staff_name"]; ?></td>
      <td width="50px">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="text-align: center;"><h2>จัดการอัตราเบี้ยผู้พิการ<h2></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="height: 40px; text-align: right;">
      	<input type="button" name="btnAdd" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เพิ่ม &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" onClick="window.location='add_rate.php?m=add';" />
      	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      	
      	
<?php
include ("function/connect.php");

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rsmem = 30;
$pageNum_rsmem = 0;
if (isset($_GET['pageNum_rsmem'])) {
  $pageNum_rsmem = $_GET['pageNum_rsmem'];
}
$startRow_rsmem = $pageNum_rsmem * $maxRows_rsmem;


if (isset($_GET['pageNum_rsmem'])) {
  $pageNum_rsmem = $_GET['pageNum_rsmem'];
}
$startRow_rsmem = $pageNum_rsmem * $maxRows_rsmem;
//คิวรี่ปกติ
$query_rsmem = " select * from money_rate ";
//echo $query_rsmem;
//break;
$query_limit_rsmem = sprintf("%s LIMIT %d, %d", $query_rsmem, $startRow_rsmem, $maxRows_rsmem);

$rsmem=mysql_db_query($dbname,$query_limit_rsmem);
$row_rsmem = mysql_fetch_assoc($rsmem);

if (isset($_GET['totalRows_rsmem'])) {
  $totalRows_rsmem = $_GET['totalRows_rsmem'];
} else {
  $all_rsmem = mysql_query($query_rsmem);
  $totalRows_rsmem = mysql_num_rows($all_rsmem);
}
$totalPages_rsmem = ceil($totalRows_rsmem/$maxRows_rsmem)-1;

$queryString_rsmem = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rsmem") == false && 
        stristr($param, "totalRows_rsmem") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rsmem = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rsmem = sprintf("&totalRows_rsmem=%d%s", $totalRows_rsmem, $queryString_rsmem);

?>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr style="background-color: #4F91CD;color: #FFFFFF;">
        <th  height="30" width="20%"><div align="center">ลำดับ</div></th>
        <th width="51%"><div align="center">อัตราเบี้ยผู้พิการ/เดือน</div></th>
        <th width="24%"><div align="center">สถานะ</div></th>
		<th width="5%"><div align="center">แก้ไข</div></th>
        </tr>
<?php

$color01 = 0;
$color02 = "";
$count01 = 1;
//เริ่มวน

if ($totalRows_rsmem > 0) { // Show if recordset not empty
 	do { 
				$y = $color01 % 2;
				if($y==0){ $color02 = "FFFFFF"; }else{ $color02 = "B0FCEA"; }
?>

<tr style="background-color: #<?php echo $color02; ?>;">
        <td height="30"><?php echo $count01; ?></td>
        <td ><?php echo $row_rsmem["m_rate"]; ?></td>
        <td >
        	<?php 
				if($row_rsmem["m_status"] == 0){
					echo 'ไม่ใช้';
				}else{
					echo 'ใช้';
				}
			?>
       </td>
        <td>
          <div align="center">
            <a href="#">
              <img src="images/28.png" width="16" height="16" onClick="window.location='add_rate.php?m=edit&id=<?php echo $row_rsmem["m_no"]; ?>';">
              </a>
            </div>
        </td>
        </tr>

<?php 
	  	$color01++;
		$count01++;
  	} while ($row_rsmem = mysql_fetch_assoc($rsmem)); ?>
<?php } // Show if recordset not empty ?>
<?php if ($totalRows_rsmem == 0) { // Show if recordset empty ?>
<?php } // Show if recordset empty ?>
    </table>
<br />
<p align="center" class="style16">&nbsp;
      จำนวน <?php echo ($startRow_rsmem + 1) ?> ถึง <?php echo min($startRow_rsmem + $maxRows_rsmem, $totalRows_rsmem) ?> จาก <?php echo $totalRows_rsmem ?></p>    
<table border="0" width="50%" align="center">
      <tr>
        <td width="23%" height="47" align="center"><?php if ($pageNum_rsmem > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_rsmem=%d%s", $currentPage, 0, $queryString_rsmem); ?>" class="style16">หน้าแรก</a>
          <?php } // Show if not first page ?>        </td>
          <td width="31%" align="center"><?php if ($pageNum_rsmem > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_rsmem=%d%s", $currentPage, max(0, $pageNum_rsmem - 1), $queryString_rsmem); ?>" class="style16">ก่อนหน้า</a>
            <?php } // Show if not first page ?>        </td>
          <td width="23%" align="center"><?php if ($pageNum_rsmem < $totalPages_rsmem) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_rsmem=%d%s", $currentPage, min($totalPages_rsmem, $pageNum_rsmem + 1), $queryString_rsmem); ?>" class="style16">ถัดไป</a>
            <?php } // Show if not last page ?>        </td>
          <td width="23%" align="center"><?php if ($pageNum_rsmem < $totalPages_rsmem) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_rsmem=%d%s", $currentPage, $totalPages_rsmem, $queryString_rsmem); ?>" class="style16">หน้าสุดท้าย</a>
            <?php } // Show if not last page ?>        </td>
        </tr>
</table> 
		  
      	
      </td>
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