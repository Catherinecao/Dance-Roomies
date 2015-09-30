<?php 
/*
Template Name: Calander Page Template
*/
global $current_user;
	get_currentuserinfo();
	$userId = $current_user->ID;
	$params = array(
		'limit'=> -1,
		'where' => "author.ID = '$userId'"
	);
	$calPod = pods('calandar', $params);
?>
<?php get_header() ?>

<main class="clearfix">

	<div class="col-sm-9 clearfix">
		<div class="listen-area clearfix">
			<div class="col-sm-12 calender-events clearfix">
				<div class="row event clearfix">
					<div class=" col-xs-2 date clearfix">
						<strong class="day clearfix">12</strong>
						<strong class="month clearfix">SEP</strong>
					</div>
					
					<div class="col-xs-10 event-content clearfix">
						<div class="space"></div>
						<h3 class="title">Auckland Salsa Ball</h3>
						<hr>
						<div class="col-xs-12 accommondation">
							<i class="fa fa-users"></i>
							<p>Room Team Name</p>
						</div>
						<div class="col-xs-12 details">
							<i class="fa fa-info-circle fa-lg"></i>
							<p>More Info</p>
						</div>
						<div class="col-xs-12 detail-info">
							<div class="venue">
								<i class="fa fa-map-marker"></i>
								<p>Address</p>
							</div>
							<div class="num">
								<i class="fa fa-user"></i>
								<p>4 members</p>
							</div>
							<div class="price">
								<i class="fa fa-usd"></i>
								<p>$30 per day</p>
							</div>
						</div>
					</div>
					
				</div><!-- /.event -->
				<div class="row event clearfix">
					<div class=" col-xs-2 date clearfix">
						<strong class="day clearfix">12</strong>
						<strong class="month clearfix">SEP</strong>
					</div>
					
					<div class="col-xs-10 event-content clearfix">
						<div class="space"></div>
						<h3 class="title">Bay Salsa Festival</h3>
						<hr>
						<div class="col-xs-12 accommondation">
						
						</div>
						<div class="col-xs-12 add-team">
							<i class="fa fa-plus fa-lg"></i>
							<p>Add a team</p>
						</div>
						<div class="col-xs-12 add-new-team">
							<div class="form-group search">
								<input type="text" class="form-control" placeholder=" Team Name">
							</div>
							<div class="add"><p>Add</p></div>	
						</div>
						<div class="col-xs-12 create-new-team">
							<i class="fa fa-users"></i>
							<p>Create a team</p>
						</div>
						<div class="col-xs-12 create-team">
							<div class="form-group search">
								<input type="text" class="form-control" placeholder=" Team Name">
							</div>
							<div class="form-group search">
								<input type="text" class="form-control" placeholder=" Accommondation">
							</div>
							<div class="form-group search">
								<input type="text" class="form-control" placeholder=" Price">
							</div>
							<div class="create"><p>Create</p></div>	
						</div>
					</div>
					
				</div><!-- /.event -->

			</div><!-- /.calender-events -->
			
		</div>
		<!-- /.container -->
	</div>

	<div class="sidebar col-sm-3 clearfix">
		<?php get_template_part('infobar'); ?>
	</div>
		
	<?php get_template_part('mobilemenu'); ?>
</main>
<?php get_footer() ?>
