<?php 
/*
Template Name: Sign In Page Template
*/

?>
<?php get_header() ?>
<main>
	<div class="container user-login">
		<div class="col-md-12 clearfix">

			<div class="col-xs-8 col-xs-offset-2 sign-up-fb">
				<p>Login with</p>

				<a href="#" class="btn sign-in-fb">Facebook</a>
			</div>
			
		</div>

		<div class="col-md-12 line"></div>

		<div class="col-md-12 greeting">
			<?php if(isset($_GET['registered'])){ ?>
				<p>Welcome... please login...</p>
			<?php } ?>
		</div>

		<div class="col-md-12">
			<?php
				if ( ! is_user_logged_in() ) { // Display WordPress login form:
				    $args = array(
				        'redirect' => get_page_link(60), 
				        'form_id' => 'loginform-custom',
				        'label_username' => __( 'Username' ),
				        'label_password' => __( 'Password' ),
				        'label_remember' => __( 'Remember Me' ),
				        'label_log_in' => __( 'Login' ),
				        'remember' => true
				    );

				    wp_login_form( $args );
				} else { // If logged in:

				    wp_loginout( home_url() ); // Display "Log Out" link.
				    echo " | ";
				    wp_register('', ''); // Display "Site Admin" link.
				}
				?>
			
		</div>
		<div class="col-md-12 register">
			<a href="<?php echo get_page_link(45); ?>" class="button-new-user">New user</a>
		</div>
	</div>
</main>


<?php get_footer() ?>
