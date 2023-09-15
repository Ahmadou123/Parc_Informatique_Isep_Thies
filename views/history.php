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
				<a href="dashboard" style=" color: #e28743;">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Tableau de bord
				</a>
			</li>
			<li  class="parent ">
				<a href="#sub-item-1" data-toggle="collapse" style=" color: #e28743;">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down" style=" color: #e28743;"><use xlink:href="#stroked-chevron-down"></use></svg></span> Transaction 
				</a>
				<ul class="children collapse" id="sub-item-1">
					
					<li>
						<a class="" href="new" style=" color: #e28743;">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg>
							Nouveau
						</a>
					</li>
					<li>
						<a class="" href="borrow" style=" color: #e28743;">
							<svg class="glyph stroked download">
								<use xlink:href="#stroked-download"/>
							</svg>
							Materiels empruntés
						</a>
					</li>
					<li>
						<a class="" href="return" style=" color: #e28743;">
							<svg class="glyph stroked checkmark">
								<use xlink:href="#stroked-checkmark"/>
							</svg>
							Materiels empruntés
						</a>
					</li>
				</ul>
			</li>
			<?php if($_SESSION['admin_type'] == 1){ ?>
			<li>
				<a href="items" style=" color: #e28743;">
					<svg class="glyph stroked desktop">
						<use xlink:href="#stroked-desktop"/>
					</svg>
					Materiels
				</a>
			</li>
			<li>
				<a href="members" style=" color: #e28743;">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user"/>
					</svg>
					Emprunteur
				</a>
			</li>
			<li>
				<a href="room" style=" color: #e28743;">
					<svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>
					Salle
				</a>
			</li>
			<li>
				<a href="inventory" style=" color: #e28743;">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Inventaire
				</a>
			</li>
			
			<li>
				<a href="user" style=" color: #e28743;">
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
				<li><a href="dashboard" style=" color: #e28743;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Graphique</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table_history">
							<thead>
								<tr>
									<th>Utilisateur</th>
									<th>Description</th>
									<th>Date</th>
								</tr>
							</thead>
						</table>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div><!-- row -->


	</div>


<?php include 'footer.php'; ?>