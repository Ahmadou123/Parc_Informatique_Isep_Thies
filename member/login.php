<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title></title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/styles.css">


	<!-- datatables -->
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/jquery.dataTables.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/font-awesome.min.css">

	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="../assets/mycustom/css/styles.css">

	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="../assets/toastr/css/toastr.css">


</head>
<body class="index-body login">


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid" style="background-color: #e28743;">
			<div class="navbar-header" >
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Basculer la navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand "  href="#" > GESTION DE PARC INFORMATIQUE ISEP THIES</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>	


<div class="container-fluid">

	<div class="panel">
		<div class="panel-body">

			<div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-4">
				<form class="frm_memberlogin">
					<h4 class="alert activeBg">Connexion  de l'emprunteur</h4>
					<div class="form-group">
						<label>ID Number</label>
						<input type="number" name="id_number" class="form-control" autofocus="on">
					</div>
					<div class="form-group">
						<button class="btn activeBg ">Se connecter</button>
						<br>
						<a href="../" style="color: #e28743; "> Aller au panneau d'administration</a>
					</div>
				</form>
			</div>

		</div>
	</div>
	
</div>



<?php include 'footer.php'; ?>