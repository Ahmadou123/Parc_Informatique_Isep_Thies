<?php 
include 'header.php';
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
	<form role="search">
		<div class="form-group">
			<!-- <input type="text" class="form-control" placeholder="Search"> -->
		</div>
	</form>
	<ul class="nav menu">
		<li class="">
			<a href="dashboard">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Tableau de bord
			</a>
		</li>
		<li class="parent">
			<a href="#">
				<span data-toggle="collapse" href="#sub-item-1">
					<svg class="glyph stroked chevron-down">
						<use xlink:href="#stroked-chevron-down"></use>
					</svg>
				</span>
				Transaction 
			</a>
			<ul class="children collapse" id="sub-item-1">
				<li>
					<a class="" href="reservation">
						<svg class="glyph stroked eye">
							<use xlink:href="#stroked-eye"/>
						</svg>
						Reservations
					</a>
				</li>
				<li>
					<a class="" href="new">
						<svg class="glyph stroked plus sign">
							<use xlink:href="#stroked-plus-sign"/>
						</svg>
						Nouveau
					</a>
				</li>
				<li>
					<a class="" href="borrow">
						<svg class="glyph stroked download">
							<use xlink:href="#stroked-download"/>
						</svg>
						Materiels empruntés
					</a>
				</li>
				<li>
					<a class="" href="return">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark"/>
						</svg>
						Materiels retournés
					</a>
				</li>
			</ul>
		</li>
		<?php if($_SESSION['admin_type'] == 1){ ?>
		<li>
			<a href="items">
				<svg class="glyph stroked desktop">
					<use xlink:href="#stroked-desktop"/>
				</svg>
				Article
			</a>
		</li>
		<li>
			<a href="members">
				<svg class="glyph stroked male user ">
					<use xlink:href="#stroked-male-user"/>
				</svg>
				Emprunteur
			</a>
		</li>
		<li>
			<a href="room">
				<svg class="glyph stroked app-window">
					<use xlink:href="#stroked-app-window"></use>
				</svg>
				Salle
			</a>
		</li>
		<li>
			<a href="inventory">
				<svg class="glyph stroked clipboard with paper">
					<use xlink:href="#stroked-clipboard-with-paper"/>
				</svg>
				Inventaire
			</a>
		</li>
		
		<li class="active">
			<a href="#">
				<svg class="glyph stroked female user">
					<use xlink:href="#stroked-female-user"/>
				</svg>
				Utilisateurs
			</a>
		</li>
		<?php 
			}
			($_SESSION['admin_type'] == 1) ? include('include_history.php') : false;
		 ?>
	</ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">

	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Utilisateurs</li>
		</ol>
		<div class="breadcrumb">
			<button class="btn btn-primary col-sm-offset-10 add_user">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Ajouter un utilisateur
			</button>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table_user">
						<thead>
							<tr>
								<th>Nom</th>
								<th>Type</th>
								<th>Nom d'utilisateur</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->

	</div><!-- row -->

	
</div>

<div class="right-sidebar user-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<form class="frmadd_users">
				<h4 class="alert bg-success">Ajouter un utilisateur</h4>
				<div class="form-group">
					<label>Nom</label>
					<input type="text" name="u_fname" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Nom utilisateur</label>
					<input type="text" name="u_username" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Mot de passe</label>
					<input type="password" name="u_password" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label>Type d'utilisateur</label>
					<select class="form-control" name="u_type" required="required">
						<option disabled selected>Veuillez sélectionner le type d'utilisateur</option>
						<option value="1">Administrateur</option>
						<option value="2">Personnel / Assistant étudiant</option>
					</select>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-danger btn-block cancel_user" type="button">
								Annuler
							</button>
						</div>
						<div class="col-md-6">
							<button class="btn btn-primary btn-block" type="submit">
								SAUVEGARDER
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="right-sidebar userdiv">
	<div class="container-fluid">
		<div class="edit-userside"></div>
	</div>
</div>


<?php include 'footer.php'; ?>