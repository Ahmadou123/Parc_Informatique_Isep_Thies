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
			<li class="couleurIsep">
				<a href="dashboard" style="text-decoration: none; color: white;">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Tableau de bord
				</a>
			</li>
			<li   class="parent ">
				<a href="#sub-item-1" data-toggle="collapse" style="color: #e28743;">
					<span data-toggle="collapse" href="#sub-item-1" style="color: #e28743;"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaction 
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
							Materiels Empruntées
							</div>
						</a>
					</li>
					<li>
						<a class="" href="return">
						<div style="color: #e28743;">
							<svg class="glyph stroked checkmark">
								<use xlink:href="#stroked-checkmark"/>
							</svg>
							Materiels returnées
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
			<li class="activeBg">
				<a href="#" style="text-decoration: none; color: white;">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Inventaire
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
				<li><a href="dashboard"  style="color: #e28743;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Inventaire</li>
			</ol>
			<div class="breadcrumb">
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-pills">
							<li ><a href="#new" data-toggle="tab" ><i class=""></i>&nbsp;&nbsp;Nouveau</a></li>
							<li ><a href="#old" data-toggle="tab" ><i class=""></i>&nbsp;&nbsp;Ancien</a></li>
							<li><a href="#lost" data-toggle="tab" ><i class=""></i>&nbsp;&nbsp;Perdu</a></li>
							<li><a href="#damaged" data-toggle="tab" ><i class=""></i>&nbsp;&nbsp;Endommagé</a></li>
							<li><a href="#pulledout" data-toggle="tab" ><i class=""></i>&nbsp;&nbsp;Total Materiels</a></li>
							<li><a href="#transferred" data-toggle="tab" ><i class=""></i>&nbsp;&nbsp;Transféré</a></li>
							<li><a href="#report2" data-toggle="tab" ><i class=""></i>&nbsp;&nbsp;Emprunté</a></li>
						</ul>
					</div>
					<!-- <div class="col-md-2">
						<button class="btn btn-primary add_equipment ">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg> &nbsp;
							Add Equipment
						</button>
					</div> -->
				</div>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="new">
								<table class="table table_inventory_new">
									<thead>
										<tr>
											<th>Model</th>
											<th>Categorie</th>
											<th>Marque</th>
											<th>Quantité</th>
											<th>Quantité restant</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="old">
								<table class="table table_inventory_old">
									<thead>
										<tr>
											<th>Model</th>
											<th>Categorie</th>
											<th>Marque</th>
											<th>Quantité</th>
											<th>Quantité restant</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="lost">
								<table class="table table_inventory_lost">
									<thead>
										<tr>
											<th>Model</th>
											<th>Categorie</th>
											<th>Marque</th>
											<th>Nombre de Materiels</th>
											<th>Remarques</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="damaged">
								<table class="table table_inventory_damaged">
									<thead>
										<tr>
											<th>Model</th>
											<th>Categorie</th>
											<th>Marque</th>
											<th>Nombre de materiel</th>
											<th>Remarques</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="pulledout">
								<table class="table table_inventory_all">
									<thead>
										<tr>
											<th>Categorie</th>
											<th>Nouveau</th>
											<th>(Ancien / Endommagé / Perdu / Emprunté / Transféré)</th>
											<th>Total</th>
										</tr>
									</thead>
								</table>
							</div>
							
							<div class="tab-pane fade" id="transferred">
								<div class="row">
									<div class="col-sm-1 pull-right">
										<div class="form-group text-right">
											<button type="button" class="btn activeBg" id="btnReloadTransferredList">Recharger la liste</button>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectYearTransferred" class="form-control">
												<option value="">Tout afficher</option>
												<?php
												$currentYear = date('Y');
												for($i = $currentYear; $i >= ($currentYear - 15); $i--): 
												?>
													<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectMonthTransferred" class="form-control">
												<option value="">Tout afficher</option>
												<?php 
												$monthArr = array("Jan","Feb","Mar","Av","Mai","Juin","Jul","Aout","Sep","Oct","Nov","Dec");
												for($i = 0; $i < 12; $i++): 
													$month = ($i + 1);
												?>
													<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table table_inventory_transfer">
											<thead>
												<tr>
													<th>Model</th>
													<th>Categorie</th>
													<th>Marque</th>
													<th>Nombre Materiels</th>
													<th>Salle</th>
													<th>Personne responsable</th>
													<th>Utilisateur</th>
													<th>Date de transfert</th>
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="report2">
								<div class="row">
									<div class="col-sm-1 pull-right">
										<div class="form-group text-right">
											<button type="button" class="btn activeBg" id="btnReloadList">Actualiser la liste</button>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectYear" class="form-control">
												<option value="">Tout afficher</option>
												<?php
												$currentYear = date('Y');
												for($i = $currentYear; $i >= ($currentYear - 15); $i--): 
												?>
													<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectMonth" class="form-control">
												<option value="">Tout afficher</option>
												<?php 
												$monthArr = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
												for($i = 0; $i < 12; $i++): 
													$month = ($i + 1);
												?>
													<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table tbl_return">
											<thead>										
												<tr>										 
													<th>Emprunteur</th>
													<th>Materiel</th>
													<th>Date d'emprunt</th>
													<th>Date de retoure</th>
													
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div><!-- row -->


	</div>



<?php include 'footer.php'; ?>