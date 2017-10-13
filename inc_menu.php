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


            <nav id="myNavbar" class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
               
                    <div style="height: 20px">

                        <!--<a class="navbar-brand" href="#"></a>-->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        	<li><a href="home.php">หน้าหลัก</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">เมนู<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="aboutus_history.php">เมนู</a></li>
                                    <li><a href="aboutus_vision.php">เมนู</a></li>
                                    <li><a href="aboutus_board.php">เมนู</a></li>
                                    <li><a href="aboutus_management_structure.php">เมนู</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">เมนู <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="service_law.php">เมนู</a></li>
                                    <li><a href="service_dataservice.php">เมนู</a></li>
                                    <li><a href="service_stat.php">เมนู</a></li>
                                    <li><a href="service_datatransfer.php">เมนู</a></li>
                                    <li><a href="service_multiphoto.php">เมนู</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">เมนู<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="knowledge_dataservice.php">เมนู</a></li>
                                    <li><a href="knowledge_dataknowledge.php">เมนู</a></li>
                                    <li><a href="knowledge_article.php">เมนู</a></li>
                                    <li><a href="knowledge_research.php">เมนู</a></li>
                                    <li><a href="knowledge_magazine.php">เมนู</a></li>
                                    <li><a href="knowledge_notable.php">เมนู</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
            </nav>

          
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
