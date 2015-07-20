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
		<div class="box-modal_close arcticmodal-close"><img src="images/close.png"></div>
		<img class="flags" src="<?php bloginfo( 'template_url' ); ?>/images/flags.png" alt="" />
		<h1>Для наших клиентов</h1>
		<p>Повышаем комфорт  наших клиентов путем оказания спектра высокопрофессиональных услуг, содействуем развитию системы образования Украины, как важнейшей составляющей успешного экономического развития страны;</p>
		<p>Обеспечиваем все условия для беспрепятственной передачи накопленного нами опыта и полученных профессиональных знаний нашим клиентам с целью повысить их;</p>
		<p>Способствуем поднятию уровня самооценки наших клиентов и формированию мышления уверенного, самодостаточного человека - гражданина своей страны, мыслящего масштабными экономическими категориями, владеющего знаниями и желанием улучшить социальный уровень  своей семьи, верящего в потенциал и будущее своей Родины;</p>
		<p>Строим совместно с нашими клиентами новый уровень системы образования в стране;</p>
		<p>Гарантируем высочайший профессионализм сотрудников;</p>
		<p>Предоставляем надежность и ответственность при оказании заявленных услуг;</p>
		<p><span>Имеем 20-летний опыт работы с клиентами не только Украины, но и других стран Евросоюза;</span></p>
		<p>Владеем безупречной репутацией  как надежный деловой высокопрофессиональный партнер;</p>
		<p>Проявляем наглядность, открытость и прозрачность рабочих схем;</p>
		<p>Имеем в наличии позитивную историю выстраивания плодотворных и долгосрочных партнерских отношений;</p>
		<p>Совершенствуем профессиональный уровень, копим новые знания, повышаем качество предоставляемых услуг;</p>
		<p>Неуклонно расширяем ассортимент предоставляемых компанией  услуг;</p>
		<p>Минимализируем риски;</p>
		<p>Повышаем эффективность бизнес-процессов;</p>
		<p><span>ПРЕДОСТАВЛЯЕМ ИНФОРМАЦИОННУЮ ПОДДЕРЖКУ КЛИЕНТОВ ПО ЛЮБЫМ ВЫТЕКАЮЩИМ  ВОПРОСАМ.</span></p>
	</div>
</div>
<!--end PopUp-->


	</body>
	</html>
