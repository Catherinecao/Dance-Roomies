<?php 
/*
Template Name: Sign Up Page Template
*/
$userPod = pods('user');
$fields = array( 'user_login' => array( 'label' => 'Username' ), 'user_pass' => array( 'type'=> 'password', 'label' => 'Password' ), 'user_email' ); 
$submitLabel = 'Register';
$redirect = get_bloginfo('url').'/sign-in?registered=true'
?>
<?php get_header() ?>
<main>

	<!-- register -->
	<div class="container user-register" id="user-register">
		<div class="col-md-12 clearfix">

			<div class="col-xs-8 col-xs-offset-2 sign-up-fb">
				<p>Login with</p>

				<a href="#" class="btn sign-in-fb">Facebook</a>
			</div>	
		</div>

		<div class="col-md-12 line"></div>

		<div class="col-md-12">
			<?php echo $userPod->form($fields, $submitLabel, $redirect); ?> 
		</div>
		
	</div>
</main>
<?php get_footer() ?>


