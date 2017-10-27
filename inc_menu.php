<style type="text/css">
    	.navbar-header{ 
			border:none !important;
			font-family: 'thaisans_neueregular' !important;
			margin-top:60px;
		}
		.navbar-brand{
			color:#fff5de !important;
			}
		.navbar-toggle{
			padding:5px !important;
			background-color:#ccc !important;
			border:none !important;
			margin-top:3px;
			margin-bottom:3px;
			left:0 !important;
			margin-left:0 !important;
			}
		.navbar-toggle .icon-bar{
			width:15px !important; height:1px !important;
			}
	    .navbar-default .navbar-toggle .icon-bar{
			background-color:#fff;
			}
		.navbar-default{ background:none !important; border:none !important; box-shadow:none !important;}
		.navbar-default .navbar-collapse, .navbar-default .navbar-form{ border:none !important;}
		.navbar{ min-height:20px !important; padding-top:0 !important;}
		.navbar-default .navbar-nav > li > a{ color:#000; font-size:14px; margin-left:30px; padding:0;}
		.dropdown-menu{ font-size:13px; font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;padding:8px; right:0; left:auto; text-align:right;}
		.dropdown-menu li a{ padding:10px;}
		.dropdown-menu li{ border-bottom:1px solid #eaeaea;}
		.navbar-nav{ float:right; text-align:right;}
		.collapse navbar-collapse{padding:0;}
		.navbar-collapse{ padding:0; clear:both;}
		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus{
			color:#4f91cd;
			background:none;
			box-shadow:none;
		}
@media (max-width: 767px) {
  	.navbar-nav > li > .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
	text-align:left;
  }
  .navbar-nav .dropdown-menu > li > a,
  .navbar-nav .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav > li > .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .dropdown-menu > li > a:hover,
  .navbar-nav .dropdown-menu > li > a:focus {
    background-image: none;
  }
}

</style>

        
    
<div class="row">
    <div class="col-xs-12 col-sm-5 col-md-6">
    	<a href="index.php">
    		<img src="images/head01.png"  height="80" class="img-responsive logo"/>
    	</a>
    </div>
    
    <div class="col-xs-12 col-sm-7 col-md-6 txt_thaisan">

<?php
if(isset($_SESSION["s_id"]) && $_SESSION["s_id"] >0){
?>
            <nav id="myNavbar" class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
               
                    <div style="height: 20px">

                        <!--<a class="navbar-brand" href="#"></a>-->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        	<li><a href="main.php">หน้าแรก</a></li>
<?php
if($_SESSION["s_staff"] == 1){ //super admin
?>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">สำนักงานเขต</a>
                                <ul class="dropdown-menu">
                                    <li><a href="mgr_limit.php">จัดการสำนักงานเขต</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">ผู้ใช้งาน</a>
                                <ul class="dropdown-menu">
                                    <li><a href="mgr_super.php">จัดการ Super Admin</a></li>
                                    <li><a href="mgr_admin.php">จัดการ Admin</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">ธนาคาร</a>
                                <ul class="dropdown-menu">
                                    <li><a href="mgr_bank.php">จัดการธนาคาร</a></li>
                                </ul>
                            </li>
							<li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">อัตราเบี้ยผู้พิการ</a>
                                <ul class="dropdown-menu">
                                    <li><a href="mgr_rate.php">จัดการอัตราเบี้ยผู้พิการ</a></li>
                                </ul>
                            </li>
<?php
}else if($_SESSION["s_staff"] == 2){ //admin
?>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">ผู้ใช้งาน</a>
                                <ul class="dropdown-menu">
                                    <li><a href="mgr_user.php">จัดการผู้ใช้งาน</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">ข้อมูลผู้พิการ</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">รายชื่อผู้ลงทะเบียนในแต่ละปี</a></li>
                                    <li><a href="#">ประกาศรายชื่อผู้มีสิทธิ</a></li>
                                    <li><a href="#">รายชื่อผู้รับเงินสดด้วยตนเอง</a></li>
                                    <li><a href="#">รายชื่อผู้รับเงินผ่านธนาคาร</a></li>
                                    <li><a href="#">รายชื่อผู้แทนรับเงินสด</a></li>
                                    <li><a href="#">รายชื่อผู้แทนรับเงินผ่านธนาคาร</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">รายงานผู้พิการ</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">รายงานการแจ้งความจำนงรับเบี้ยผู้พิการ</a></li>
                                    <li><a href="#">รายงานการโอนเงินเข้าบัญชีเงินฝากธนาคาร</a></li>
                                    <li><a href="#">รายงานการรับเงินผู้มีสิทธิรับเบี้ยผู้พิการ</a></li>
                                    <li><a href="#">รายงานการตาย</a></li>
                                    <li><a href="#">รายงานการรับเงินสด</a></li>
                                    <li><a href="#">รายงานการรับเงินเบี้ยผู้พิการ</a></li>
                                    <li><a href="#">รายงานการรับเงินตามพินัยกรรม</a></li>
                                    <li><a href="#">รายงานสรุปยอดผู้รับเงินส่งผู้บริหาร</a></li>
                                    <li><a href="#">รายงานการจ่ายเงินรายเดือน</a></li>
                                    <li><a href="#">รายงานการจ่ายเงินรายใหม่</a></li>
                                </ul>
                            </li>
<?php
}else if($_SESSION["s_staff"] == 3){ //user
?>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">ผู้ยื่นคำขอ</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">จัดการข้อมูลผู้ยื่นคำขอ</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">ผู้รับมอบอำนาจ</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">จัดการข้อมูลผู้รับมอบอำนาจ</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">ผู้พิการ</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">จัดการข้อมูลผู้พิการ</a></li>
                                    <li><a href="#">จัดการข้อมูลผู้พิการสละสิทธิ์</a></li>
                                    <li><a href="#">จัดการข้อมูลผู้พิการเสียชีวิต</a></li>
                                </ul>
                            </li>
<?php
}//end user
?>
                            <li><a href="logout.php">ออกจากระบบ</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
            </nav>
<?php
}
?>
          
  </div>
        </div>
        
        
        
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;"> 
    		<div class="line_blue"></div>
    	</div>
    </div>
    
<script>
$( ".navbar-nav li.dropdown" ).click(function() {
	$(this).children(".dropdown-menu" ).slideDown( "slow");
	$(".dropdown.open .dropdown-menu").slideUp("slow");
});
</script>
