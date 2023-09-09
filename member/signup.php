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
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Basculer la navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> GESTION DE PARC INFORMATIQUE</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>	


<div class="container-fluid">


	<div class="panel">
		<div class="panel-body">


		<div class="row">
			<div class="col-md-4 col-md-offset-2 student-div">
				<div class="panel panel-blue">
					<div class="panel-body">
						<h4 class="text-center color-white">
						<i class="fa fa-user fa-2x"></i> &nbsp;
						JE SUIS ÉTUDIANT
						</h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 faculty-div">
				<div class="panel panel-blue">
					<div class="panel-body">
						<h4 class="text-center color-white">
							<i class="fa fa-graduation-cap fa-2x"></i> &nbsp;
							JE SUIS UNE FACULTÉ
						</h4>
					</div>
				</div>
			</div>
		</div>


			<div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-4">
				<form class="frm_student_sign">
					<h4 class="">S'inscrire - Étudiant</h4>
					<hr>
					<div class="form-group">
						<label>Id de l'école</label>
						<input type="number" name="sid_number" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Prénom</label>
						<input type="text" name="s_fname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="s_lname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Genre</label>
						<select name="s_gender" class="form-control" required>
							<option disabled selected>Votre sexe</option>
							<option>Homme</option>
							<option>Femme</option>
						</select>
					</div>
					<div class="form-group">
						<label>Numero de telephone</label>
						<input type="tel" name="s_contact" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Departement</label>
						<select name="s_department" class="form-control" required>
							<option disabled selected>Sélectionnez le département</option>
							<option>EIT</option>
							<option>TICA</option>
							<option>EE</option>
							<option>TL</option>
							<option>IAA</option>
							<option>SAA</option>
							<option>ASC</option>
							<option>IEA</option>
						</select>
					</div>
					<div class="form-group hide">
						<label>Major</label>
						<input type="text" name="s_major" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Année</label>
								<select name="s_year" class="form-control" required>
									<option selected disabled>Sélectionnez l'année</option>
									<option>1ére année</option>
									<option>2éme année</option>
									
								</select>
							</div>
							<div class="col-md-6">
								<label>Section</label>
								<input type="text" name="s_section" class="form-control" required autocomplete="off">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Mot de passe</label>
						<input type="password" name="s_password" class="form-control" required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn_student" type="submit">S'inscrire</button>
					</div>
				</form>

				<form class="frm_faculty_sign hide">
					<h4 class="">S'inscrire - Metier</h4>
					<hr>
					<div class="form-group">
						<label>Numero de l'école</label>
						<input type="number" name="f_id" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Prénom</label>
						<input type="text" name="f_fname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="f_lname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Genre</label>
						<select name="f_gender" class="form-control" required>
							<option disabled selected>Votre sexe</option>
							<option>Homme </option>
							<option>Femme</option>
						</select>
					</div>
					<div class="form-group">
						<label>Numero de telephone</label>
						<input type="tel" name="f_contact" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Departement</label>
						<select name="f_department" class="form-control" required>
							<option disabled selected>Selection un departement</option>
							<option>EIT</option>
							<option>TICA</option>
							<option>EE</option>
							<option>TL</option>
							<option>IAA</option>
							<option>SAA</option>
							<option>ASC</option>
							<option>IEA</option>
						</select>
					</div>
					<div class="form-group">
						<label>Mot de passe</label>
						<input type="password" name="f_password" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn_faculty" type="submit">S'inscrire</button>
					</div>
				</form>
			</div>

		</div>
	</div>
	
</div>



<?php include 'footer.php'; ?>