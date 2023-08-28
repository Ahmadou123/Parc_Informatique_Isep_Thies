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
			<li class="activeBg"  >
				<a href="dashboard" style="text-decoration: none; color: white;">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Tableau de bord
				</a>
			</li>
			<li   class="parent ">
				<a href="#sub-item-1" data-toggle="collapse">
				<div style="text-decoration: none; color: #e28743;"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Transaction</div> 
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
							Materials empruntés
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
			<li class="activeBg">
				<a href="#" style="text-decoration: none; color: white;">
					<svg class="glyph stroked desktop">
						<use xlink:href="#stroked-desktop"/>
					</svg>
					Materiels
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


	<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard" style="color: #e28743;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Materiel</li>
			</ol>
			<div class="breadcrumb">
				<button class="btn activeBg col-sm-offset-10 add_equipment" style="text-decoration: none; color: white;">
					<svg class="glyph stroked plus sign">
						<use xlink:href="#stroked-plus-sign"/>
					</svg> &nbsp;
					Ajouter un Materiel
				</button>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered table_equipment ">
							<thead>
								<tr>
									<th>Image</th>
									<th>Model</th>
									<th>Categorie</th>
									<th>Marque</th>
									<th>Description</th>
									<th>Quantité</th>
									<th>Quantité restant</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div>
	</div>


<div class="right-sidebar equipment-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<h4 class="alert bg-success">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Ajouter un article
			</h4>
			<form class="frm_addequipment" enctype="multipart/form-data">
				<input type="hidden" name="key" value="add_equipment" />
				<div class="form-group">
					<label>Identifiant de dispositif</label>
					<input type="text" name="e_number" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Model</label>
					<input type="text" name="e_model" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Categorie</label>
					<select name="e_category" class="form-control" required>
						<option selected disabled>Veuillez sélectionner une catégorie</option>
						<option>Souris</option>
						<option>Clavier</option>
						<option>Écran</option>
						<option>Projecteur</option>
						<option>Télécommande</option>
						<option>Climatisation</option>
						<option>AVR</option>
						<option>Cles USB</option>
						<option>UPS</option>
						<option>Routeur</option>
						<option>Table</option>
						<option>Commutateur Hub</option>
					</select> 
				</div>
				<div class="form-group">
					<label>Marque</label>
					<input type="text" name="e_brand" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label>Quantite</label>
					<input type="number" name="e_stock" class="form-control" min="1" required>
				</div>
				<div class="form-group hide">
					<label>Affecter une salle</label>
					<select name="e_assigned" class="form-control" required>
					</select>
				</div>
				<div class="form-group">
					<label>Type</label>
					<select type="text" name="e_type" class="form-control" required>
						<option disabled selected>Veuillez sélectionner le type</option>
						<option>Consommable</option>
						<option>Non-consommable</option>
					</select>
				</div>
				<div class="form-group">
					<label>Status</label>
					<select name="e_status" class="form-control" required>
						<option disabled selected>Veuillez sélectionner le statut</option>
						<option value="1">Nouveau</option>
						<option value="2">Ancien</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>Mr</label>
					<input type="text" name="e_mr" class="form-control" required>
				</div>
				
				
				
				 <div class="form-group">
						<label >Image</label>
						
						  <input type="file" name="e_photo" for="inputPassword3" class="form-control" required />
						
					  </div>
				
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-danger btn-block cancel-equipment" type="button">
								<i class="fa fa-remove"></i>
								ANNULER
							</button>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-success btn-block" type="submit">
							AJOUTER
								<i class="fa fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
			</form>
		</div>
	</div>
</div>


<div class="right-sidebar equipment-view">
	<div class="sidebar-form equipment-form">
		
	</div>
</div>



<?php include 'footer.php'; ?>