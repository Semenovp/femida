<?php get_header();?>
	<!--main-->
	<!--first block-->
	<div class="services">
		<?php
			$education = new WP_Query('p=6&post_type=page');
			while($education->have_posts()):$education->the_post();
		?>
				<div class="education">
					<?php the_post_thumbnail();?>
					<h3><?php the_title();?><br><span>ЗА ГРАНИЦЕЙ</span></h3>
					<?php the_excerpt();?>
					<a href="#">больше...</a>
				</div>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
		<?php
			$business = new WP_Query('p=14&post_type=page');
			while($business->have_posts()):$business->the_post();
		?>
				<div class="business">
					<?php the_post_thumbnail();?>
					<h3><?php the_title();?><br><span>ЗА ГРАНИЦЕЙ</span></h3>
					<?php the_excerpt();?>
					<a href="#">больше...</a>
				</div>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
		<div class="back_form">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/3.png">
			<h3>ЮРИДИЧЕСКИЕ КОНСУЛЬТАЦИИ<br><span>ЗА ГРАНИЦЕЙ</span></h3>
			<?php echo do_shortcode('[contact-form-7 id="18" title="Контактная форма (Главная)"]');?>
		</div>
	</div>
	<!--end first block-->
	<!--second block-->
	<div class="for_client">

		<?php
		    $query = new WP_Query('p=53&post_type=page');
			while($query->have_posts()):$query->the_post();
		?>
				<?php the_post_thumbnail();?>
				<h1><?php the_title();?></h1>
					<?php the_excerpt();?>
				<a href="#" onclick="$('#exampleModal').arcticmodal()">больше...</a>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<!--end second block-->

	<!--third block-->
	<div class="third_block">
		<div><p>ШАГИ СОТРУДНИЧЕСТВА</p></div>
		<div class="steps">
			<a href="#"><div class="steps_cart">
					<div class="steps_cart_up"><img src="<?php bloginfo( 'template_url' ); ?>/images/1m.png" /></div>
					<div class="steps_cart_down"><p>ОБРАЩЕНИЕ В<br>КОМПАНИЮ</p></div>
				</div></a>
			<a href="#"><div class="steps_cart">
					<div class="steps_cart_up"><img src="<?php bloginfo( 'template_url' ); ?>/images/2m.png" /></div>
					<div class="steps_cart_down"><p>ЛИЧНАЯ<br>КОНСУЛЬТАЦИЯ</p></div>
				</div></a>
			<a href="#"> <div class="steps_cart">
					<div class="steps_cart_up"><img src="<?php bloginfo( 'template_url' ); ?>/images/3m.png" /></div>
					<div class="steps_cart_down"><p>СБОР<br>ДОКУМЕНТОВ</p></div>
				</div></a>
			<a href="#"><div class="steps_cart">
					<div class="steps_cart_up"><img src="<?php bloginfo( 'template_url' ); ?>/images/4m.png" /></div>
					<div class="steps_cart_down"><p>ПОЛУЧЕНИЯ<br>РЕЗУЛЬТАТА</p></div>
				</div></a>
			<a href="#"><div class="steps_cart">
					<div class="steps_cart_up"><img src="<?php bloginfo( 'template_url' ); ?>/images/5m.png" /></div>
					<div class="steps_cart_down"><p>ДАЛЬНЕЙШЕЕ<br>СОПРОВОЖДЕНИЕ</p></div>
				</div></a>
		</div>
		<div class="partners">
			<p>ПАРТНЕРЫ:</p>
			<?php
				$args = array(
					'post_type' => 'partners'
				);
				$partners = new WP_Query($args);
				while($partners->have_posts()):$partners->the_post();
					$image = get_field('image');
					?>
					<a href="<?php echo get_field('link');?>"><img src="<?php echo $image['url'];?>" alt="" /></a>
				<?php
				endwhile;
				wp_reset_postdata();
			?>

		</div>
	</div>
<!--end third block-->

<!--end main-->
<!--footer-->
<div class="footer">
	<div class="footer_top"></div>
	<div class="footer_main">
		<div class="logo_div"><a href="/"><img class="logo_bootom" src="<?php bloginfo( 'template_url' ); ?>/images/logo_bottom.png" alt="" /></a></div>
		<div class="menu_bottom">
			<div>
				<?php wp_nav_menu(array('theme_location' => 'footer-left', 'menu_class' => ''));?>
			</div>
			<div>
				<?php wp_nav_menu(array('theme_location' => 'footer-right', 'menu_class' => ''));?>
			</div>
		</div>
		<div class="mail">
			<img class="office" src="<?php bloginfo( 'template_url' ); ?>/images/office.png" alt=""><p>Украина, Ужгород, <br>ул. Гагарина 13а</p>
			<img class="email" src="<?php bloginfo( 'template_url' ); ?>/images/mail.png" alt=""><a href="mailto:name@email.com">femida94@mail.ru</a>
		</div>
	</div>
	<div class="footer_bottom"></div>
</div>
<!-- end footer-->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.easy-ticker.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js" type="text/javascript"></script>
<?php wp_footer();?>
<!--PopUp-->
<div style="display:none;">
	<div class="box-modal" id="exampleModal">
		<div class="box-modal_close arcticmodal-close"><img src="<?php bloginfo( 'template_url' ); ?>/images/close.png"></div>
		<?php
			$query = new WP_Query('p=53&post_type=page');
			while($query->have_posts()):$query->the_post();
			$image = get_field('pop-up');
		?>
		<img src="<?php echo $image['url'];?>">
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		<?php
			endwhile;
			wp_reset_postdata();
		?>
	</div>
</div>
<!--end PopUp-->