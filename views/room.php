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
			<div style="text-decoration: none; color: #e28743;"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Transaction</div> 
				</a>
			<ul class="children collapse" id="sub-item-1">
				
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
						Materiel empruntées
						</div>
					</a>
				</li>
				<li>
					<a class="" href="return">
					<div style="color: #e28743;">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark"/>
						</svg>
						Materiels retournées
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
		<li>
			<a href="members">
			<div style="color: #e28743;">
				<svg class="glyph stroked male user ">
					<use xlink:href="#stroked-male-user"/>
				</svg>
				Emprunteur
				</div>
			</a>
		</li>
		<li class="activeBg">
			<a href="#" style="text-decoration: none; color: white;">
				<svg class="glyph stroked app-window">
					<use xlink:href="#stroked-app-window"></use>
				</svg>
				Salle
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
			<li><a href="dashboard" style="color: #e28743;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Salles</li>
		</ol>
		<div class="breadcrumb">
			<button class="btn couleurIsep col-sm-offset-10 add_room" style="text-decoration: none; color: white;">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Ajouter un salle
			</button>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-hover table_room">
						<thead>
							<tr>
								<th>Nom de la salle</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->

	</div><!-- row -->
</div>

<div class="right-sidebar room-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<form class="frm_addroom">
				<h4 class="alert bg-success"><i class="fa fa-plus"></i>Ajouter une salle</h4>
				<div class="form-group">
					<label>Numéro de la salle</label>
					<input type="number" name="room_name" min="0" class="form-control" autofocus autocomplete="off" required>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-danger btn-block cancel_room" type="button">
								<i class="fa fa-remove"></i>
								ANNULER
							</button>
						</div>
						<div class="col-md-6">
							<button class="btn btn-primary btn-block" type="submit">
							SAUVEGARDER
								<i class="fa fa-check"></i>
							</button>
						</div>
					</div>
				</div>
			</form>
			<!-- <form>
				<hr>
				<div class="form-group">
					<h4 class="alert bg-success">Upload csv file here</h4>
				</div>
				<div class="form-group">
					<a href="">Download csv format here.</a>
				</div>
				<div class="form-group">
					<input type="file" name="csv_room" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Upload File</button>
				</div>
			</form> -->
			<div class="div_editroom"></div>
		</div>
	</div>
</div>

<div class="right-sidebar editroom-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<form class="frm_editroom">
				<h4 class="alert bg-success"><i class="fa fa-edit"></i> Salle d'édition</h4>
				<div class="form-group">
					<label>Nom de la salle</label>
					<input type="text" name="edit_rm_name" class="form-control" autofocus required autocomplete="off" >
					<input type="hidden" name="edit_rm_id">
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<button class="btn btn-danger btn-block cancel_editroom" type="button">
							<i class="fa fa-remove"></i>
							ANNULER
						</button>
					</div>
					<div class="col-md-6">
						<button class="btn btn-primary btn-block" type="submit">
						MISE À JOUR
							<i class="fa fa-check"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>