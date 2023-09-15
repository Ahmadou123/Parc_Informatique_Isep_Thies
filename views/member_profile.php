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
			<a href="dashboard" style="color: #e28743;">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Tableau de bord
			</a>
		</li>
		<li class="parent ">
			<a href="#sub-item-1" data-toggle="collapse" style="color: #e28743;">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down" style="color: #e28743;"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaction 
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
						Materiels empruntés
					</a>
				</li>
				<li>
					<a class="" href="return" style="color: #e28743;">
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
			<a href="items" style="color: #e28743;">
				<svg class="glyph stroked desktop">
					<use xlink:href="#stroked-desktop"/>
				</svg>
				Materiel
			</a>
		</li>
		<li class="activeBg">
			<a href="#">
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

<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2 main">	
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard" style="color: #e28743;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active"><a href="members">Emprunteur</a></li>
			<li class="active"><?php echo $_GET['name'];?> Profile</li>
		</ol>
		<!-- <div class="breadcrumb">
			<button class="btn btn-primary col-sm-offset-7 add_member">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Upload CSV File
			</button>
			<button class="btn btn-primary add_student">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Add Student
			</button>
			<button class="btn btn-primary add_faculty">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Add Faculty
			</button>
		</div> -->
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-bordered tbl_member_profile">
						<thead>
							<tr>
								<th>Date d'emprunt</th>
								<th>Materiels empruntés</th>
								<th>Salle</th>
								<th>Status</th>
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
				<a class="btn btn-primary btn-block" target="_blank" download="member_format.csv" href="../assets/downloadables/member_format.csv">
					<i class="fa fa-download"></i>
					Télécharger le format
				</a>
			</div>
			<form class="frm_addmember" enctype="multipart/form-data">
				<div class="form-group">
					<label>Téléverser le fichier</label>
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

<script type="text/javascript">
	var id = '<?php echo $_GET['id']; ?>';
	console.log(id);
	member_profile(id);
</script>