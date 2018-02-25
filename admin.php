<!DOCTYPE html>
<?php
	require_once 'logincheck.php';
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
	<!-- <link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" /> -->
	<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" /> 



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
   <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	</head>
<body>
	<!-- <div class = "navbar navbar-default navbar-fixed-top"> -->
		<!-- <img src = "../images/logo.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Health Center Patient Record Management System - Victorias City</label> -->
			<?php
				$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
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





















	<div id = "">

		<div id = "add" class = "card panel-success">	
			<div class = "card-header">
				<div class="card-title">ADD ADMINISTRATOR</div>
				<button id = "hide" class = "btn btn-sm btn-danger" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
			</div>
			<div class = "card-body">
				<form id = "form_admin" method = "POST" enctype = "multi-part/form-data" >
					<div class = "panel panel-default" style = "width:60%; margin:auto;">
					<div class = "panel-heading">
					</div>
					<div class = "panel-body">
						<div class = "form-group">
							<label for = "username">Username: </label>
							<input class = "form-control" name = "username" type = "text" required = "required">
						</div>
						<div class = "form-group">	
							<label for = "password">Password: </label>
							<input class = "form-control" name = "password" maxlength = "12" type = "password" required = "required">
						</div>
						<div class = "form-group">
							<label for = "firstname">Firstname: </label>
							<input class = "form-control" type = "text" name = "firstname" required = "required">
						</div>
						<div class = "form-group">
							<label for = "middlename">Middlename: </label>
							<input class = "form-control" type = "text" placeholder = "(Optional)" name = "middlename">
						</div>
						<div class = "form-group">
							<label for = "lastname">Lastname: </label>
							<input class = "form-control" type = "text" name = "lastname">
						</div>
							<button  class = "btn btn-primary" name = "save_admin" ><span class = "glyphicon glyphicon-save"></span> SAVE</button>
							<br />
					</div>
					<?php require 'add_admin.php' ?>					
					</div>
				</form>
			</div>	
				<br />
		<br />
		</div>	









<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                          <div class="float-right">  <button id = "show" class = "btn btn-info"><span class  = "glyphicon glyphicon-plus"></span> ADD</button></div>
                        </div>
                        <div class="card-body">
                        	<!-- <button id = "show" class = "btn btn-info"><span class  = "glyphicon glyphicon-plus"></span> ADD</button> -->
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                     <tr>
							<th>Username</th>
							<th>Password</th>
							<th>Name</th>
							<th><center>Action</center></th>
						</tr>
                    </thead>
                    <tbody>
                <?php
						$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `admin` ORDER BY `admin_id` DESC") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>
						<tr>
							<td><?php echo $fetch['username']?></td>
							<td><?php echo md5($fetch['password'])?></td>
							<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
							<td><center><a class = "btn btn-sm btn-warning" href = "edit_admin.php?id=<?php echo $fetch['admin_id']?>&lastname=<?php echo $fetch['lastname']?>"><i class = "glyphicon glyphicon-edit"></i> Update</a> <a onclick="confirmationDelete(this);return false;" href = "delete_admin.php?id=<?php echo $fetch['admin_id']?>" class = "btn btn-sm btn-danger"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
						</tr>
					<?php
						}
						$conn->close();
					?>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>














		
	</div>

	
<?php require'script.php' ?>
<script type = "text/javascript">
	function confirmationDelete(anchor)
		{
			var conf = confirm('Are you sure want to delete this record?');
			if(conf)
			window.location=anchor.attr("href");
		}
</script>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>	


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>



   

 <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
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