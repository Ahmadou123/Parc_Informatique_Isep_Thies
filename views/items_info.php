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
				<a href="dashboard" style="color: #e28743;">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Tableau de bord
				</a>
			</li>
			<li style="texton: none-decorati; color: #e28743;" class="parent ">
				<a href="#sub-item-1" data-toggle="collapse" style="color: #e28743;">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaction 
				</a>
				<ul class="children collapse" id="sub-item-1">
					
					<li>
						<a class="" href="new" style="color: #e28743;">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg>
							Nouveau
						</a>
					</li>
					<li>
						<a class="" href="borrow" style="color: #e28743;">
							<svg class="glyph stroked download">
								<use xlink:href="#stroked-download"/>
							</svg>
							Materiel Empruntées
						</a>
					</li>
					<li>
						<a class="" href="return" style="color: #e28743;">
							<svg class="glyph stroked checkmark">
								<use xlink:href="#stroked-checkmark"/>
							</svg>
						Materiel retournées
						</a>
					</li>
				</ul>
			</li>
			<?php if($_SESSION['admin_type'] == 1){ ?>
			<li class="activeBg">
				<a href="#">
					<svg class="glyph stroked desktop">
						<use xlink:href="#stroked-desktop"/>
					</svg>
					Materiel
				</a>
			</li>
			<li>
				<a href="members" style="color: #e28743;">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user"/>
					</svg>
					Emprunteur
				</a>
			</li>
			<li>
				<a href="room" style="color: #e28743;">
					<svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>
					Salle
				</a>
			</li>
			<li>
				<a href="inventory" style="color: #e28743;">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Inventaire
				</a>
			</li>
			
			<li>
				<a href="user" style="color: #e28743;">
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


	<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">
		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard" style="color: #e28743;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class=""><a href="items">Materiel</a></li>
				<li class="active">Informations sur les Materiels</li>
			</ol>
			<div class="breadcrumb">
				<button class="btn btn-primary item-add" type="button">
					<i class="fa fa-plus"></i>
					Ajouter une quantité
				</button>
				<button class="btn btn-primary item-edit" type="button">
					<i class="fa fa-edit"></i>
					Modifier Materiel
				</button>
				<button class="btn btn-primary item-change" type="button">
					<i class="fa fa-arrows-alt"></i>
					Changer le statut
				</button>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table ">
							<thead>
							
							</thead>
							<tbody>
								<tr>
									<td style="text-align:center;" class="e_photo" ></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Identifiant de série / Identifiant de dispositif</td>
									<td class="e_id"></td>
								</tr>
								<tr>
									<td class="col-sm-6">Model</td>
									<td class="e_model"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Categorie</td>
									<td class="e_category"></td>
								</tr>
								<tr>
									<td class="col-sm-6">Marque</td>
									<td class="e_brand"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Description</td>
									<td class="e_description"></td>
								</tr>
								<tr>
									<td class="col-sm-6">Quantité</td>
									<td class="e_stock"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Quantité restant</td>
									<td class="e_stockleft"></td>
								</tr>
								<!-- <tr>
									<td class="col-sm-6">Assign Room</td>
									<td class="e_assign"></td>
								</tr> -->
								<tr>
									<td class="col-sm-6">Type</td>
									<td class="e_type"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Status</td>
									<td class="e_status"></td>
								</tr>
								<tr>
									<td class="col-sm-6">Mr</td>
									<td class="e_mr"></td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div>
	</div>


<div class="right-sidebar equipment-info">
	<div class="sidebar-form">
		<div class="container-fluid equipment-forminfo"></div>
	</div>
</div>



<?php include 'footer.php'; ?>

<script type="text/javascript">
	
	var id = '<?php echo $_GET["item"]; ?>';

	equipment_info(id);

	function getequipmentid(){
		return id;
	}
	

</script>