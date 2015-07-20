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
		<img src="<?php bloginfo( 'template_url' ); ?>/images/bild.png" alt="" />
		<h1>Для наших клиентов</h1>
		<p>Повышаем комфорт  наших клиентов путем оказания спектра высокопрофессиональных услуг, содействуем развитию системы образования Украины, как важнейшей составляющей успешного экономического развития страны;<br>
			Обеспечиваем все условия для беспрепятственной передачи накопленного нами опыта и полученных профессиональных знаний нашим клиентам с целью повысить их;<br>
			Способствуем поднятию уровня самооценки наших клиентов и формированию мышления уверенного, самодостаточного человека - гражданина своей страны, мыслящего масштабными экономическими категориями, владеющего знаниями и желанием улучшить социальный уровень  своей семьи, верящего в потенциал и будущее своей Родины;<br>
			Строим совместно с нашими клиентами новый уровень системы образования в стране;<br>
			Гарантируем высочайший профессионализм сотрудников; </p>
		<a href="#" onclick="$('#exampleModal').arcticmodal()">больше...</a>
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
<?php get_footer();?>