<!DOCTYPE html>
<?php
	require_once 'logincheck.php';
	$year = date("Y", strtotime("+8 HOURS"));
	$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
	$qjan = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
	$fjan = $qjan->fetch_array();
	$qfeb = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
	$ffeb = $qfeb->fetch_array();
	$qmar = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
	$fmar = $qmar->fetch_array();
	$qapr = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
	$fapr = $qapr->fetch_array();
	$qmay = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
	$fmay = $qmay->fetch_array();
	$qjun = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
	$fjun = $qjun->fetch_array();
	$qjul = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
	$fjul = $qjul->fetch_array();
	$qaug = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
	$faug = $qaug->fetch_array();
	$qsep = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
	$fsep = $qsep->fetch_array();
	$qoct = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
	$foct = $qoct->fetch_array();
	$qnov = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
	$fnov = $qnov->fetch_array();
	$qdec = $conn->query("SELECT COUNT(*) as total FROM `fecalisys` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
	$fdec = $qdec->fetch_array();
	$year = date("Y");
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
	<!-- <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
	<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />  -->



<link rel="apple-touch-icon" href="apple-icon.png">
<link rel="shortcut icon" href="favicon.ico">

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
		window.onload = function(){ 
			$(".chartContainer").CanvasJSChart({ 
				title: { 
					text: "Monthly cardiology Patient Population <?php echo $year?>" 
				}, 
				axisY: { 
					title: "Total Population", 
					includeZero: false 
				}, 
				data: [ 
				{ 
					type: "column", 
					toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "January", y: <?php echo $fjan['total']?> },
						{ label: "Febuary", y: <?php echo $ffeb['total']?> },
						{ label: "March", y: <?php echo $fmar['total']?> },
						{ label: "April", y: <?php echo $fapr['total']?> },
						{ label: "May", y: <?php echo $fmay['total']?> },
						{ label: "June", y: <?php echo $fjun['total']?> },
						{ label: "July", y: <?php echo $fjul['total']?> },
						{ label: "August", y: <?php echo $faug['total']?> },
						{ label: "September", y: <?php echo $fsep['total']?> },
						{ label: "October", y: <?php echo $foct['total']?> },
						{ label: "November", y: <?php echo $fnov['total']?> },
						{ label: "December", y: <?php echo $fdec['total']?> }
					] 
				} 
				] 
			}); 
		}
</script>
	</head>
<body>
	




	<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
      
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home.php"> <i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Accounts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="tables-basic.html">Administrator</a></li>
                            <li><i class="fa fa-user"></i><a href="tables-data.html">User</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded=""> <i class="menu-icon fa fa-users"></i>Patients</a>
                
					</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Department</a>
                        <ul class="sub-menu children dropdown-menu">
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

<div id="right-panel" class="right-panel">

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
				$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
				$f = $q->fetch_array();
				echo $f['firstname']." ".$f['lastname'];
				$conn->close();
			?>
			<i class="fa fa-user"></i>
			</a>

			<div class="user-menu dropdown-menu">

					<a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
			</div>
		</div>

	

	</div>
</div>

</header><!-- /header -->


<div class="breadcrumbs" style="background:#20a8d8;">
<div class="col-sm-4">
<div class="page-header float-left" style="background:#20a8d8; color:#fff;">
<div class="page-title" >
	<h1 style="background:#20a8d8;">Cardiology </h1>
</div>
</div>
</div>
</div>
<div class="content mt-3">


























			<div class="col-md-12">
			<div class="card">
                        <div class="card-header">
                            <strong class="card-title">Patient</strong>
                        </div>
                <div class="card-body">		
			<table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
					  <th>S/N No</th>
					  <th>Name</th>
					  <th>Age</th>
					  <th>Gender</th>
					  <th>Address</th>
					  <th><center>Action</center></th>
                      </tr>
					</thead>
					


                    <tbody>


                  	<?php 
					$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
					$query = $conn->query("SELECT * FROM `fecalisys` NATURAL JOIN `itr` GROUP BY `itr_no` ORDER BY `fecalisys_id` DESC") or die(mysqli_error());
					while($fetch = $query->fetch_array()){
				?>
					<tr>
						<td><?php echo $fetch['itr_no']?></td>
						<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
						<td><?php echo $fetch['age']?></td>
						<td><?php echo $fetch['gender']?></td>
						<td><?php echo $fetch['address']?></td>
						<td><center><a class = "btn btn-primary" href = "cardiology_record.php?itr_no=<?php echo $fetch['itr_no']?>"><span class = "glyphicon glyphicon-search"></span> All Records</a></center></td>
					</tr>
				<?php
					}
				?>	
                    </tbody>
                  </table>






		<!-- </div>	 -->
	<!-- </div>	 -->












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