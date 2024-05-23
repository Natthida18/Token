<?php
/**
 * Template Name: Tips
 *
 * @package token-v2
 */

get_header();
?>
<main>


<?php if (apply_filters( 'wpml_current_language', NULL ) == 'ja'){ ?>

	<?php get_header(); ?>

	<div class="container">
	  <div class="breadcrumbs">
		<div class="inner">
		  <?php if(function_exists('bcn_display'))

				{

					bcn_display();

				}?>
		</div>

		<!--FB Sharer-->
		<div class="block-social">
		  <div id="fb-root"></div>
		  <script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		  <div class="fb-share-button" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
		</div>
		<!--FB Sharer-->

	  </div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!--<div id="date"><?php the_date('Y-m-d'); ?></div>-->

	<?php the_content(); ?>

	<!--<div id="date">カテゴリー: <?php the_category(', '); ?>　<?php the_tags('タグ: ', ', '); ?></div>



	<div id="next">

	<?php previous_post_link('←「%link」前の記事へ　'); ?>

	<?php next_post_link('　次の記事へ「%link」→'); ?>

	</div>

	<?php comments_template(); ?>





	<p>

	トラックバックURL

	<input type="text" value="<?php trackback_url(); ?>">

	</p>





	<?php endwhile; else: ?>



	<p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>



	<?php endif; ?>-->

	<?php get_footer(); ?>



<?php } ?>

<!-- **************** -->

<?php if (apply_filters( 'wpml_current_language', NULL ) == 'th'){ ?>


	<?php get_header(); ?>

	<div class="container">
		<div class="breadcrumbs">
			<div class="inner">
				<?php if(function_exists('bcn_display'))
					{

							bcn_display();

					}?>
			</div>

			<?php echo get_template_part('fb_share'); ?>

		</div>
	</div>


	<div class="page page-tips">
	<div class="container">
	<div class="row section">
	<div class="pagetitle">
	<h1> สาระความรู้และเทคนิคเกี่ยวกับรถกระเช้า </h1>
	</div>
	</div>
	</div>

	<!-- **** -->

	<div class="container">
		<div class="d-flex d-xs-block tips_main">

			<div class="_r1">
				<h4> หมวดหมู่ </h4>
				<ul class="tips_sidemenu nav">
					<li><a href="#" title="" class="box01 tips_filter_button _active" data-target=".tips_index_box" data-filter=""	                                     ><span class="_img"></span><span class="_text"> บทความทั้งหมด </span></a></li>
					<li><a href="#" title="" class="box01 tips_filter_button        " data-target=".tips_index_box" data-filter="._category_skymaster"    ><span class="_img"><img src="/wp-content/themes/token-v2/assets/images/menu2-1_th-xs.png"></span><span class="_text">รถกระเช้า <span style="font-size:1.0rem"><br>(SKYMASTER)</span></span></a></li>
					<li><a href="#" title="" class="box01 tips_filter_button        " data-target=".tips_index_box" data-filter="._category_boom_lift"    ><span class="_img"><img src="/wp-content/themes/token-v2/assets/images/menu2-3_th-xs.png"></span><span class="_text">บูมลิฟท <span style="font-size:1.0rem"><br>(BOOM LIFT)</span></span></a></li>
					<li><a href="#" title="" class="box01 tips_filter_button        " data-target=".tips_index_box" data-filter="._category_scissors_lift"><span class="_img"><img src="/wp-content/themes/token-v2/assets/images/menu2-4_th-xs.png"></span><span class="_text">ขากรรไกร X-Lift <span style="font-size:1.0rem"><br>(SCISSORS LIFT)</span></span></a></li>
				</ul>
			</div>

			<div class="_r2">

					<div class="row" id="tips_container">

						<?php

						  $args = array(  'post_type' => 'tips' ,
										  'posts_per_page' => 999 ,
										  'orderby' => 'publish_date',
										  'order' => 'DESC',
									  ) ;

						  query_posts( $args );

						  while ( have_posts() ) : the_post();

									$ss_content_summary  =  get_the_excerpt();

									$ss_title = get_the_title();
									$ss_url = get_the_permalink();
									$ss_category = get_field('ss_category');
									$ss_headline = get_field('ss_headline');
									$ss_url = get_the_permalink();
									$ss_picture = get_field('ss_picture');
									$ss_pdf = get_field('ss_pdf');

									if (is_array( $ss_picture)){
										$img_url = $ss_picture['sizes']['medium'];
										$img_alt = $ss_picture['alt'];
									}

								   ?>

										<div class="col-sm-6 col-md-4 tips_index_box <?php print implode(" ", array_map( function($v){ $v = str_replace(" ", "_", $v); $v = strtolower($v); return "_category_$v";}, $ss_category ) ); ?> ">
											<div class="_tag"><?php print implode(" ", array_map( function($v){ return "<span class='_tag'>$v</span>";}, $ss_category ) ); ?></div>
											<h3 class="_title h4"><?php print $ss_title ?></h3>
											<div class="_img"><a href="<?php print $ss_url ?>"><img src="<?php print $img_url; ?>" class="img-responsive" alt="<?php echo htmlspecialchars($img_alt); ?>"/></a></div>
											<div class="_description"><?php print $ss_content_summary; ?></div>
											<div class="_more"><a href="<?php print $ss_url ?>"><img src="/wp-content/themes/token-v2/assets/images/tips_more.png" style="width:98px"/></a></div>
										</div>

									<?php

							endwhile;

						?>

					</div>

			</div>


		</div>
	</div>

	<!-- **** -->

	<?php get_footer(); ?>

<?php } ?>
<!-- **************** -->

</main>


