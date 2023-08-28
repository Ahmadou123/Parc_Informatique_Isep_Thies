<?php 
include 'header.php';
?>

<div id="sidebar-collapse" class="col-sm-2 col-md-2 col-lg-2 sidebar">
	<form role="search">
		<div class="form-group">
			<!-- <input type="text" class="form-control" placeholder="Search"> -->
		</div>
	</form>
	<ul class="nav menu">
		<li class="">
			<a href="dashboard">
			<div style="color: #e28743;">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Tableau de bord
				</div>
			</a>
		</li>
		<li class="parent ">
			<a href="#sub-item-1" data-toggle="collapse">
			<div style="color: #e28743;"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Transaction</div> 
				</a>
			<ul class="children collapse" id="sub-item-1">
				<li>
					<a class="" href="reservation">
					<div style="color: #e28743;">
						<svg class="glyph stroked eye">
							<use xlink:href="#stroked-eye"/>
						</svg>
						Reservations
						</div>
					</a>
				</li>
				<li>
					<a class="" href="new">
					<div style="color: #e28743;">
						<svg class="glyph stroked plus sign">
							<use xlink:href="#stroked-plus-sign"/>
						</svg>
						Nouveau
					</div>
					</a>
				</li>
				<li>
					<a class="" href="borrow">
					<div style="color: #e28743;">
						<svg class="glyph stroked download">
							<use xlink:href="#stroked-download"/>
						</svg>
						Materiels empruntées
						</div>
					</a>
				</li>
				<li>
					<a class="" href="return">
					<div style="color: #e28743;">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark"/>
						</svg>
						Materiels retournés
						</div>
					</a>
				</li>
			</ul>
		</li>
		<?php if($_SESSION['admin_type'] == 1){ ?>
		<li>
			<a href="items">
			<div style="color: #e28743;">
				<svg class="glyph stroked desktop">
					<use xlink:href="#stroked-desktop"/>
				</svg>
				Materiel
				</div>
			</a>
		</li>
		<li class="activeBg">
			<a href="#" style="text-decoration: none; color: white;">
				<svg class="glyph stroked male user ">
					<use xlink:href="#stroked-male-user"/>
				</svg>
				Emprunteur
			</a>
		</li>
		<li>
			<a href="room">
			<div style="color: #e28743;">
				<svg class="glyph stroked app-window">
					<use xlink:href="#stroked-app-window"></use>
				</svg>
				Salle
				</div>
			</a>
		</li>
		<li>
			<a href="inventory">
			<div style="color: #e28743;">
				<svg class="glyph stroked clipboard with paper">
					<use xlink:href="#stroked-clipboard-with-paper"/>
				</svg>
				Inventaire
				</div>
			</a>
		</li>
		
		<li>
			<a href="user">
			<div style="color: #e28743;">
				<svg class="glyph stroked female user">
					<use xlink:href="#stroked-female-user"/>
				</svg>
				Utilisateur
				</div>
			</a>
		</li>
			<?php 
				}
				($_SESSION['admin_type'] == 1) ? include('include_history.php') : false;
			 ?>
	</ul>
</div><!--/.sidebar-->

<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2 main">	
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard" style="color: #e28743;"><svg class="glyph stroked home"  style="color: #e28743;"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Emprunteur</li>
		</ol>
		<div class="breadcrumb">
			<button class="btn activeBg col-sm-offset-7 add_member" style="text-decoration: none; color: white;">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Téléverser le fichier CSV
			</button>
			<button class="btn activeBg add_student" style="text-decoration: none; color: white;">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Ajouter un étudiant
			</button>
			<button class="btn activeBg add_faculty" style="text-decoration: none; color: white;">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Ajouter un membre du corps enseignant
			</button>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table_member">
						<thead>
							<tr>
								<th>ID Number</th>
								<th>Nom</th>
								<th>Genre</th>
								<th>Contact</th>
								<th>Departement</th>
								<th>Type</th>
								<th>Année/Section</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->
	</div><!-- row -->
	
</div>

<div class="right-sidebar member-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<h4 class="alert bg-success">Ajouter un membre</h4>
			<div class="form-group">
				<a class="btn activeBg btn-block" target="_blank" download="member_format.csv" href="../assets/downloadables/member_format.csv">
					<i class="fa fa-download"></i>
					Format de téléchargement
				</a>
			</div>
			<form class="frm_addmember" enctype="multipart/form-data">
				<div class="form-group">
					<label>Téléverser un fichier</label>
					<input type="file" name="file" class="form-control" required>
					<input type="hidden" name="key" value="add_member">
				</div>
				<div class="form-group">
					<button class="btn btn-danger cancel_member" type="button">Annuler</button>
					<button class="btn btn-success" type="submit">Televerser</button>
				</div>
			</form>	
		</div>
	</div>
</div>

<div class="right-sidebar divedit-member">
	<div class="container-fluid">
		<br>
		<br>
		<div class="member-form"></div>
	</div>
</div>



<?php include 'footer.php'; ?>