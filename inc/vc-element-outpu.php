<?php 

//banner section 


function main_slider_shortcode($slider){
$result = shortcode_atts(array(

'slider_title' =>'',
'slider_cont' =>'',




),$slider);
extract($result);
ob_start();
?>


<!-- Slider -->
	<section id="banner">
				<h1><?php echo esc_html($slider_title);?></h1>
				<p><?php echo esc_html($slider_cont);?></p>
			</section>


<!-- Slider Section End -->	





<?php 
return ob_get_clean(); 
} 
add_shortcode('main_slider','main_slider_shortcode');


// for magna work

function mollst($mollst){
	extract(
	 shortcode_atts(
	 
		array(
			
			'molls_work_p'  =>	'',
			
		),$mollst
	 
	 )
	
	
	);
	ob_start();
	?>
	<?php 
	
	$agrs=array('post_type' =>'magna', 'posts_per_page' => $magna);
	$the_query= new WP_Query($agrs);
	
	?>
		<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
					<?php while($the_query->have_posts()):$the_query->the_post();?>
						<article>
							<header>
								<h3><?php the_content();?></h3>
							</header>
							<p><?php the_title();?></p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						
						<?php wp_reset_postdata();?>
						<?php endwhile;?>
					</div>
				</div>
			</section>
	<?php
	return ob_get_clean();
}

add_shortcode('molls_work','mollst');


// for feaut work

function faisal($faisal){
	extract(
	 shortcode_atts(
	 
		array(
			'comot_heading'  =>	'',
			'comod_des'  =>	'',
			'como_work_p'  =>	'',
			
		),$faisal
	 
	 )
	
	
	);
	ob_start();
	?>
	<?php 
	
	$agrs=array('post_type' =>'Feugat', 'posts_per_page' => $Feugat);
	$the_query= new WP_Query($agrs);
	
	?>
		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<header>
						<h2><?php echo esc_html($comot_heading);?></h2>
						<p><?php echo esc_html($comod_des);?></p>
					</header>
					<div class="flex flex-4">
					<?php while($the_query->have_posts()):$the_query->the_post();?>
						<div class="box person">
							<div class="image round">
								<img src="<?php the_post_thumbnail_url();?>" alt="Person 1" />
							</div>
							<h3><?php the_title();?></h3>
							<p><?php the_content();?></p>
						</div>
					<?php wp_reset_postdata();?>
					<?php endwhile;?>
					</div>
				</div>
			</section>

	<?php
	return ob_get_clean();
}

add_shortcode('comodo_work','faisal');



// for nucli work

function nucile($nucile){
	extract(
	 shortcode_atts(
	 
		array(
			'nucil_heading'  =>	'',
			'nucil_des'  =>	'',
			'nucilwork_p'  =>	'',
			
		),$nucile
	 
	 )
	
	
	);
	ob_start();
	?>
	<?php 
	
	$agrs=array('post_type' =>'Nunce', 'posts_per_page' => $Nunce);
	$the_query= new WP_Query($agrs);
	
	?>
		<!-- Two -->
		<!-- Three -->
			<section id="three" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2><?php echo esc_html($nucil_heading);?></h2>
						<p><?php echo esc_html($nucil_des);?></p>
					</header>
					<div class="flex flex-2">
					
					<?php while($the_query->have_posts()):$the_query->the_post();?>
						<article>
							<div class="image fit">
								<img src="<?php the_post_thumbnail_url();?>" alt="Pic 01" />
							</div>
							<header>
								<h3><?php the_title();?></h3>
							</header>
							<p><?php the_content();?></p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						<?php wp_reset_postdata();?>
						<?php endwhile;?>
					</div>
				</div>
			</section>

	<?php
	return ob_get_clean();
}

add_shortcode('nucil_work','nucile');


// for generic work

function generics($generics){
	extract(
	 shortcode_atts(
	 
		array(
			'generic_heading'  =>	'',
			'genric_des'  =>	'',
			'genric_con'  =>	'',
			'generic_p'  =>	'',
			
		),$generics
	 
	 )
	
	
	);
	ob_start();
	?>
	<?php 
	
	$agrs=array('post_type' =>'Nunce', 'posts_per_page' => $Nunce);
	$the_query= new WP_Query($agrs);
	
	?>
		<!-- Two -->
		<!-- Three -->
			<section id="three" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2><?php echo esc_html($generic_heading);?></h2>
						<p><?php echo esc_html($genric_des);?></p>
					</header>
					<p><?php echo esc_html($genric_con);?></p>
					<p><?php echo esc_html($genric_con);?></p>
					<div class="flex flex-2">
					
					<?php while($the_query->have_posts()):$the_query->the_post();?>
						<article>
							<div class="image fit">
								<img src="<?php the_post_thumbnail_url();?>" alt="Pic 01" />
							</div>
							<header>
								<h3><?php the_title();?></h3>
							</header>
							<p><?php the_content();?></p>
							<footer>
								<a href="#" class="button special">More</a>
							</footer>
						</article>
						<?php wp_reset_postdata();?>
						<?php endwhile;?>
					</div>
				</div>
			</section>

	<?php
	return ob_get_clean();
}

add_shortcode('generic_work','generics');



