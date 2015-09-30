<?php 
/*
Template Name: Events Page Template
*/

if(!is_user_logged_in()){
	$params = array('limit'=> -1);
	$eventPod = pods('event', $params);
}else{
	global $current_user;
	get_currentuserinfo();
	$userId = $current_user->ID;
	$params = array(
		'limit'=> -1,
		'where' => "author.ID = '$userId'"
	);
	$calPod = pods('calandar', $params);

	// var_dump($calPod->total());

/*	$params = array('limit'=> -1);
	$eventPod = pods('event', $params);*/
}

?>

<?php get_header() ?>
<main class="clearfix">

	<div class="col-sm-9 clearfix">
		<div class="listen-area clearfix">

			<?php
			if(!is_user_logged_in()){ 

				while($eventPod->fetch()):

			?>
				<div class="col-sm-6 card clearfix">
					<a href="<?php echo get_page_link(41); ?>">
					<div class="col-sm-12 img">
						<img src="<?php bloginfo('template_url') ?>/img/Two_dancers-1.png" alt="">
					</div>
					<div class="col-sm-12 blur">
						<div class="col-xs-12 title">
							<h3 class="col-xs-10 row"><?php echo $eventPod->field('name'); ?></h3>
							<?php if(is_user_logged_in()){ ?>
								<a href="#" data-id="<?php echo $eventPod->field('id') ?>" class="col-xs-2 row add-to-calender"><i class="fa fa-calendar-plus-o fa-2x"></i></a>
							<?php } ?>
						</div>
						<div class="col-xs-12 border-bottom"></div>
						<div class="col-xs-12 ">
							<p class="date">
								<i class="fa fa-clock-o"></i>
								<?php echo $eventPod->field('time_date'); ?></p>
							<p class="add">
								<i class="fa fa-map-marker"></i>
								<?php echo $eventPod->field('address'); ?></p>
							<p class="ticket">
								<i class="fa fa-usd"></i>
								<?php echo $eventPod->field('ticket'); ?></p>
						</div>
					</div>
					<div class="col-sm-12 tabs">
						<?php $types = ($eventPod->field('type_of_dance')) ?>
							<?php foreach ($types as $type) { ?>
								<button class="tab tab-salsa"><?php echo $type['name']; ?></button>
							<?php } ?>

					</div>
					</a>
				</div>
				<?php endwhile;
			}else{
				while($calPod->fetch()):
					$eventID = $calPod->field('event.id');
					$eventPod = pods('event', $eventID);
			?>
				<div class="col-sm-6 card clearfix">
					<div class="col-sm-12 img">
						<img src="<?php bloginfo('template_url') ?>/img/Two_dancers-1.png" alt="">
					</div>
					<div class="col-sm-12 blur">
						<div class="col-xs-12 title">
							<h3 class="col-xs-10 row"><?php echo $eventPod->field('name'); ?></h3>
							<?php if(is_user_logged_in()){ ?>
								<a href="#" data-id="<?php echo $eventPod->field('id') ?>" class="col-xs-2 row add-to-calender"><i class="fa fa-calendar-plus-o fa-2x"></i></a>
							<?php } ?>
						</div>
						<div class="col-xs-12 border-bottom"></div>
						<div class="col-xs-12 ">
							<p class="date">
								<i class="fa fa-clock-o"></i>
								<?php echo $eventPod->field('time_date'); ?></p>
							<p class="add">
								<i class="fa fa-map-marker"></i>
								<?php echo $eventPod->field('address'); ?></p>
							<p class="ticket">
								<i class="fa fa-usd"></i>
								<?php echo $eventPod->field('ticket'); ?></p>
						</div>
					</div>
					<div class="col-sm-12 tabs">
						<?php $types = ($eventPod->field('type_of_dance')) ?>
							<?php foreach ($types as $type) { ?>
								<button class="tab tab-salsa"><?php echo $type['name']; ?></button>
							<?php } ?>

					</div>
				</div>

			<?php	endwhile;
			} ?>
			<div class="col-xs-9 row message clearfix">		
				<div class="bg">
					<h3>Event has added to your calandar successfully!</h3>
				</div>
				<div class="shadow">
					<img src="<?php bloginfo('template_url') ?>/img/shadow.png" alt="">
				</div>
			</div>
		</div>
		<!-- /.container -->
		
	</div>



	<div class="sidebar col-sm-3 clearfix">
		<div class="filterBar mobile clearfix visible-xs">
			<div class="col-sm-12  filter-item clearfix">
		        <select class="select-style">
		        	<option selected="selected" value="">2015</option>
		            <option value="0">2016</option>
		            <option value="1">2017</option>
		            <option value="2">2018</option>
		        </select>
			</div>
			<div class="col-sm-12 filter-item clearfix">
		        <select class="select-style">
		        	<option selected="selected" value="">Salsa</option>
		            <option value="0">Bachata</option>
		            <option value="1">Cha Cha</option>
		            <option value="2">Zouk</option>
		        </select>
			</div>
			<div class="col-sm-12 filter-item clearfix">
		        <select class="select-style">
		        	<option selected="selected" value="">Auckland</option>
		            <option value="0">Wellinton</option>
		            <option value="1">Chrischurch</option>
		            <option value="2">Oversea</option>
		        </select>
			</div>
			<div class="col-sm-12 filter-item clearfix">
		        <select class="select-style">
		        	<option selected="selected" value="">Events</option>
		            <option value="0">Wanted</option>
		        </select>
			</div>
		</div><!-- /.filterbar -->

		<div class="clearfix">
			<div class="col-sm-12 filterbar-control filter-label clearfix" >			
				Filter By
				<i class="fa fa-plus fa-lg"></i>
			</div>
			<!-- /.sidebar-control -->
			<div class="filterBar tablet clearfix hidden-xs">
				<div class="col-sm-12  filter-item clearfix">
			        <select class="select-style">
			        	<option selected="selected" value="">2015</option>
			            <option value="0">2016</option>
			            <option value="1">2017</option>
			            <option value="2">2018</option>
			        </select>
				</div>
				<div class="col-sm-12 filter-item clearfix">
			        <select class="select-style">
			        	<option selected="selected" value="">Salsa</option>
			            <option value="0">Bachata</option>
			            <option value="1">Cha Cha</option>
			            <option value="2">Zouk</option>
			        </select>
				</div>
				<div class="col-sm-12 filter-item clearfix">
			        <select class="select-style">
			        	<option selected="selected" value="">Auckland</option>
			            <option value="0">Wellinton</option>
			            <option value="1">Chrischurch</option>
			            <option value="2">Oversea</option>
			        </select>
				</div>
				<div class="col-sm-12 filter-item clearfix">
			        <select class="select-style">
			        	<option selected="selected" value="">Events</option>
			            <option value="0">Wanted</option>
			        </select>
				</div>
			</div><!-- /.filterbar -->
		</div>
		
		<!-- infor bar -->
		<?php if(is_user_logged_in()){
			get_template_part('infobar');
		} ?>

	</div>
	<?php if(is_user_logged_in()){
		get_template_part('mobilemenu');
	} ?>
	<!-- /.sidebar -->

	
</main>
<?php get_footer() ?>
