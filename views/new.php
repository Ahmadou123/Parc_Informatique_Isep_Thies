<?php 
date_default_timezone_set('Asia/Manila');
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
		<li class="parent active">
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
				<li class="active">
					<a class="" href="#">
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
						Article empruntées
					</a>
				</li>
				<li>
					<a class="" href="return">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark"/>
						</svg>
						Article retournées
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
				Emprunter
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

<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">

	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Emprunter</li>
		</ol>
				
			<div class="row">
				<br/>
				<br/>
				
				<div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
					<div class="panel panel-primary custom-panel">
						<div class="panel-heading">
							<i class="fa fa-plus-circle"></i>
							Emprunter des articles
						</div>
						<div class="panel-body">
							<form class="frm_borrow">
								<div class="form-group">
									<label class="">Sélectionnez l'emprunteur</label>
									<select class="form-control input-lg" name="borrow_membername" required="required">
										<option></option>
									</select>
								</div>
								<div class="form-group">
									<label class="">Sélectionner les articles (maximum de 5 articles)</label>
									<select class="form-control input-lg borrowitem" name="borrowitem[]" multiple="multiple" required="required">
										<option></option>
									</select>
									<input type="hidden" name="user_id" value="<?php echo $_SESSION['admin_id']; ?>">
								</div>
								<div class="form-group">
									<label>Sélectionnez la salle</label>
									<select class="form-control" name="reserve_room" required></select>
								</div>
								<div class="form-group">
									<label class="">Limite de temps</label>
									<input name="expected_time_of_return" id="timeLimit" type="text" class="form-control" value="<?php echo date('Y-m-d h:i A'); ?>" />
								</div>
								<div class="form-group">
									<div class="pull-right">
										<button class="btn btn-primary" type="submit">
										Confirmer l'emprunt
											<i class="fa fa-chevron-right"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>



		<?php include 'footer.php'; ?>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#timeLimit").datetimepicker({
					minTime: '<?php echo date("H:i"); ?>',
					maxTime: '18:00',
					minDate: 0,
					maxDate: 0,
					format:'Y-m-d h:i A',
					step: 15
				});
			});
		</script>