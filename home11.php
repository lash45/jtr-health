<!DOCTYPE html>
<?php
	require_once 'logincheck.php';
	$date = date("Y", strtotime("+ 8 HOURS"));
	$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
	$qfecalysis = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$ffecalysis = $qfecalysis->fetch_array();
	$qmaternity = $conn->query("SELECT COUNT(*) as total FROM `birthing` `prenatal` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$fmaternity = $qmaternity->fetch_array();
	$qhematology = $conn->query("SELECT COUNT(*) as total FROM `hematology` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$fhematology = $qhematology->fetch_array();
	$qdental = $conn->query("SELECT COUNT(*) as total FROM `dental` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$fdental = $qdental->fetch_array();
	$qxray = $conn->query("SELECT COUNT(*) as total FROM `radiological` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$fxray = $qxray->fetch_array();
	$qrehab = $conn->query("SELECT COUNT(*) as total FROM `rehabilitation` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$frehab = $qrehab->fetch_array();
	$qsputum = $conn->query("SELECT COUNT(*) as total FROM `sputum` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$fsputum = $qsputum->fetch_array();
	$qurinalysis = $conn->query("SELECT COUNT(*) as total FROM `urinalysis` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$furinalysis = $qurinalysis->fetch_array();
?>
<html lang = "eng">
	<head>
		<title>JTR</title>
		<meta charset = "utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="JTR Health">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel = "shortcut icon" href = "../images/logo.png" /> -->
	 <!-- <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" /> -->




    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
	<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
	<!-- <link rel = "stylesheet" type = "text/css" href = "../css/customize.css" /> -->
	<link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



		<?php require 'script.php'?>
		<script src = "../js/jquery.canvasjs.min.js"></script>
		<script type="text/javascript"> 
			window.onload = function() { 
				$("#chartContainer1").CanvasJSChart({ 
					title: { 
						text: "Total Patient Population <?php echo $date?>",
						fontSize: 24
					}, 
					axisY: { 
						title: "asda" 
					}, 
					legend :{ 
						verticalAlign: "center", 
						horizontalAlign: "left" 
					}, 
					data: [ 
					{ 
						type: "pie", 
						showInLegend: true, 
						toolTipContent: "{label} <br/> {y}", 
						indexLabel: "{y}", 
						dataPoints: [ 
							{ label: "Cardiology",  y: 
								<?php 
									if($ffecalysis == ""){
											echo 0;
									}else{
										echo $ffecalysis['total'];
									}
								?>, legendText: "Cardiology"}, 
							{ label: "Maternity",  y: 
								<?php 
									if($fmaternity == ""){
										echo 0;
									}else{
										echo $fmaternity['total'];
									}	
								?>, legendText: "Maternity"},
							{ label: "Hematology",  y: 
								<?php 
									if($fhematology == ""){
										echo 0;
									}else{
										echo $fhematology['total'];
									}	
								?>, legendText: "Hematology"},
							{ label: "Dental",  y: 
								<?php 
									if($fdental == ""){
										echo 0;
									}else{
									echo $fdental['total'];
									}
								?>, legendText: "Dental"},
							{ label: "Xray",  y: 
								<?php 
									if($fxray == ""){
										echo 0;
									}else{
										echo $fxray['total'];
									}	
								?>, legendText: "Xray"},
							{ label: "Rehabilitation",  y: 
								<?php
									if($frehab == ""){
										echo 0;
									}else{
										echo $frehab['total'];
									}	
								?>, legendText: "Rehabilitation"},
							{ label: "Sputum",  y: 
								<?php
									if($fsputum == ""){
										echo 0;
									}else{
										echo $fsputum['total'];
									}	
								?>, legendText: "Sputum"},
							{ label: "Urinalysis",  y: 
								<?php 
									if($furinalysis == ""){
										echo 0;
									}else{
										echo $furinalysis['total'];
									}	
								?>, legendText: "Urinalysis"}
						] 
					} 
					] 
				}); 







				$("#chartContainer2").CanvasJSChart({ 
					title: { 
						text: "Total Patient Population <?php echo $date?>",
						fontSize: 24
					}, 
					axisY: { 
						title: "asda" 
					}, 
					legend :{ 
						verticalAlign: "center", 
						horizontalAlign: "left" 
					}, 
					data: [ 
					{ 
						type: "pie", 
						showInLegend: true, 
						toolTipContent: "{label} <br/> {y}", 
						indexLabel: "{y}", 
						dataPoints: [ 
							{ label: "Cardiology",  y: 
								<?php 
									if($ffecalysis == ""){
											echo 0;
									}else{
										echo $ffecalysis['total'];
									}
								?>, legendText: "Cardiology"}, 
							{ label: "Maternity",  y: 
								<?php 
									if($fmaternity == ""){
										echo 0;
									}else{
										echo $fmaternity['total'];
									}	
								?>, legendText: "Maternity"},
							{ label: "Hematology",  y: 
								<?php 
									if($fhematology == ""){
										echo 0;
									}else{
										echo $fhematology['total'];
									}	
								?>, legendText: "Hematology"},
							{ label: "Dental",  y: 
								<?php 
									if($fdental == ""){
										echo 0;
									}else{
									echo $fdental['total'];
									}
								?>, legendText: "Dental"},
							{ label: "Xray",  y: 
								<?php 
									if($fxray == ""){
										echo 0;
									}else{
										echo $fxray['total'];
									}	
								?>, legendText: "Xray"},
							{ label: "Rehabilitation",  y: 
								<?php
									if($frehab == ""){
										echo 0;
									}else{
										echo $frehab['total'];
									}	
								?>, legendText: "Rehabilitation"},
							{ label: "Sputum",  y: 
								<?php
									if($fsputum == ""){
										echo 0;
									}else{
										echo $fsputum['total'];
									}	
								?>, legendText: "Sputum"},
							{ label: "Urinalysis",  y: 
								<?php 
									if($furinalysis == ""){
										echo 0;
									}else{
										echo $furinalysis['total'];
									}	
								?>, legendText: "Urinalysis"}
						] 
					} 
					] 
				}); 
			} 
		</script>
	</head>

	
<body style="width:100%;">




		<?php 
			$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = $_SESSION[admin_id]") or die(mysqli_error());
			$f = $q->fetch_array();
		?>





   <aside id="left-panel" class="left-panel" style="background: #013243;">
        <nav class="navbar navbar-expand-sm navbar-default" style="background: #013243;">

            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
      
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav" style="background: #013243;">
                    <li class="active">
                        <a href="home.php"> <i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Accounts</a>
                        <ul class="sub-menu children dropdown-menu" style="background: #013243;">
                            <li><i class="fa fa-user"></i><a href="admin.php">Administrator</a></li>
                            <li><i class="fa fa-user"></i><a href="user.php">User</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="patient.php" class="" data-toggle="" aria-haspopup="true" aria-expanded=""> <i class="menu-icon fa fa-users"></i>Patients</a>
                
					</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Department</a>
                        <ul class="sub-menu children dropdown-menu" style="background: #013243;">
                            <li><i class="fa fa-folder"></i><a href="cardiology.php">Cardiology</a></li>
                            <li><i class="fa fa-folder"></i><a href="maternity.php">General</a></li>
                            <li><i class="fa fa-folder"></i><a href="hematology.php">Neurology</a></li>
                            <li><i class="fa fa-folder"></i><a href="dental.php">Oby/Gyn</a></li>
                            <li><i class="fa fa-folder"></i><a href="xray.php">Oncology</a></li>
                            <li><i class="fa fa-folder"></i><a href="rehabilitaion.php">Intensive Care</a></li>
                            <li><i class="fa fa-folder"></i><a href="sputum.php">Emergency</a></li>
                            <li><i class="fa fa-folder"></i><a href="urinalysis.php">Pediatrics</a></li>
                        
                        </ul>
                    </li>

</ul>
</div><!-- /.navbar-collapse -->
</nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

<!-- Header-->






<div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <!-- <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a> -->
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php
				// $conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
				echo $f['firstname']." ".$f['lastname'];
				$conn->close();
			?>
							<i class="fa fa-user"></i>
                        </a>

                        <div class="user-menu dropdown-menu">

                                <a class="nav-link" href="index.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                

                </div>
            </div>

        </header><!-- /header -->





















<div class="breadcrumbs">
<div class="col-sm-4">
<div class="page-header float-left">
<div class="page-title">
	<h1>Welcome to JTR Health </h1>
</div>
</div>
</div>
</div>

<div class="content mt-3">

<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-1">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<div class="dropdown-menu-content">
				<!-- <a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a> -->
			</div>
		</div>
	</div>
	<h4 class="mb-0">
		<span class="">Cardiology</span>
	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">2</span>
	</h2>

	<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
		<canvas id=""></canvas>
	</div>

</div>

</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-2">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<!-- <div class="dropdown-menu-content">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div> -->
		</div>
	</div>
	<h4 class="mb-0">
		<span class="">General</span>
	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">10</span>
	</h2>

	<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
		<canvas id="widgetChart2"></canvas>
	</div>

</div>
</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-3 ">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<!-- <div class="dropdown-menu-content">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div> -->
		</div>
	</div>
	<h4 class="mb-0">
		<span class="">Neurology</span>
	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">1</span>
	</h2>

</div>

	<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
		<canvas id="widgetChart3"></canvas>
	</div>
</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-4">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<div class="dropdown-menu-content">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div> -->
	</div>
	<h4 class="mb-0">
		<span class="">Obstetrics</span>
	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">3</span>
	</h2>

	<div class="chart-wrapper px-3" style="height:70px;" height="70"/>
		<canvas id="widgetChart4"></canvas>
	</div>

</div>
</div>
</div>
<!--/.col-->



<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-1"  style="background: #2abb9c;">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<div class="dropdown-menu-content">
				<!-- <a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a> -->
			</div>
		</div>
	</div>
	<h4 class="mb-0">
		<span class="">Oncology</span>
	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">5</span>
	</h2>

	<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
		<canvas id=""></canvas>
	</div>

</div>

</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-7" style="background: #901d22;">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<!-- <div class="dropdown-menu-content">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div> -->
		</div>
	</div>
	<h4 class="mb-0">
		<span class="">Intensive Care</span>
	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">4</span>
	</h2>

	<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
		<canvas id="widgetChart2"></canvas>
	</div>

</div>
</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-u"  style="background: #264347;">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<!-- <div class="dropdown-menu-content">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div> -->
		</div>
	</div>
	<h4 class="mb-0">
		<span class="">Emergency</span>

	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">7</span>
	</h2>

</div>

	<div class="chart-wrapper px-0" style="height:70px;" height="70"/>
		<canvas id="widgetChart3"></canvas>
	</div>
</div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
<div class="card text-white bg-flat-color-8"  style="background: #be91d4;">
<div class="card-body pb-0">
	<div class="dropdown float-right">
		<button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
			<i class="fa fa-cog"></i>
		</button>
		<!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<div class="dropdown-menu-content">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div> -->
	</div>
	<h4 class="mb-0">
		<span class="">Pediatrics</span>
	</h4>
	<p class="text-light">Patients</p>
	<h2 class="mb-0">
		<span class="count">3</span>
	</h2>

	<div class="chart-wrapper px-3" style="height:70px;" height="70"/>
		<canvas id="widgetChart4"></canvas>
	</div>

</div>
</div>
</div>
<!--/.col-->




<div class="col-sm-6 col-lg-6">
<div class="card text-white bg-flat-color-9">
<div class="card-body pb-0">
	
<div id = "content">
	
	<div class = "well">
		<div id="chartContainer1" style="width: 100%; height: 400px"></div> 
	</div>
</div>

</div>
</div>
</div>

<div class="col-sm-6 col-lg-6">
<div class="card text-white bg-flat-color-9">
<div class="card-body pb-0">
	
<div id = "content">
	
	<div class = "well">
		<div id="chartContainer2" style="width: 100%; height: 400px"></div> 
	</div>
</div>

</div>
</div>
</div>




<!--  -->



</div> <!-- .content -->
</div>







<!--  -->


</div> <!-- .content -->
</div><!-- /#right-panel -->





























































































<!-- 

			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
					
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div> -->














	<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

		
</body>
</html>