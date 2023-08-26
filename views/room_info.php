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
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Tableau de bord
			</a>
		</li>
		<li class="parent ">
			<a href="#sub-item-1" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaction 
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
				Materiels
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
		<li class="active">
			<a href="#">
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
		
		<li>
			<a href="user">
				<svg class="glyph stroked female user">
					<use xlink:href="#stroked-female-user"/>
				</svg>
				Utilisateur
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
			<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class=""><a href="room">Salles</a></li>
			<li class="active"><?php echo ucwords($_GET['name']); ?></li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table_roominfo">
							<thead>
								<tr>
									<th>Model</th>
									<th>Categorie</th>
									<th>Marque</th>
									<th>Description</th>
									<th>Quantité</th>
									<th>Type</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->

	</div><!-- row -->
</div>

<div class="right-sidebar transfer">
	<div class="sidebar-form">
		<div class="container-fluid">
			<br/>
			<form class="frm_transfer">
				<input type="hidden" name="key" value="transfer_item" />
				<input type="hidden" name="id" value="0" />
				<div class="form-group">
					<label>Salle de transfert</label>
					<select name="transfer_room" class="form-control" required></select>
				</div>
				<div class="form-group">
					<label>Nombre de quantité</label>
					<input type="number" name="number_items" class="form-control" min="0" required>
				</div>
				<div class="form-group">
					<label>Personnel responsable</label>
					<input type="text" name="personincharge" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Transfert</button>
					<button class="btn btn-danger cancel-transfer" type="button" >Annuler</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="right-sidebar change_status">
	<div class="sidebar-form">
		<div class="container-fluid">
			
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-sm mymodal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form class="frm_returnroom">
				<div class="modal-header">
					
					<h4 class="modal-title" id="myModalLabel">Nombre de quantité</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nombre de quantité</label>
						<input type="number" name="qty_transfer" class="form-control" min="0">
						<input type="hidden" name="id">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Ferme</button>
					<button type="submit" class="btn btn-primary">Retour</button>
				</div>	
			</form>
		</div>
	</div>
</div>




<?php include 'footer.php'; ?>

<script type="text/javascript">
	$(function() {
		var a = '<?php echo $_GET['name']; ?>';
		var b = '<?php echo $_GET['id']; ?>';
		room_info(a,b);
	});
</script>