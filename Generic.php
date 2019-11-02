<?php 
/*template name: generic*/
?>
<?php get_header();?>
		<!-- Header -->
	

		<?php while(have_posts()){
			the_post();
			
			the_content();
		}?>

		<?php get_footer();?>