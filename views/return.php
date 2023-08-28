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
				<div style="color: #e28743;">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Tableau de bord
					</div>
				</a>
			</li>
			<li class="parent activeBg">
				<a href="#sub-item-1" data-toggle="collapse">
				<div style="text-decoration: none; color: white;"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Transaction</div> 
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


					<li class="">
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
							Materiels empruntés
                        </div>
						</a>
					</li>
					<li class="active">
						<a class="" href="#">
						<div style="color: #e28743;">
							<svg class="glyph stroked checkmark">
								<use xlink:href="#stroked-checkmark"/>
							</svg>
							Materiel retournés
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
					Materiels
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
			<li>
				<a href="inventory">
				<div style="color: #e28743;">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Materiel
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
				<li><a href="dashboard"  style="color: #e28743;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Materiels retournés</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered tbl_return">
							<thead>
								<tr>
									<th>Nom du emprunteur</th>
									<th>Materiels retournés</th>
									<th>Date d'emprunt</th>
									<th>Date retour</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>



<?php include 'footer.php'; ?>