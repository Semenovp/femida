<?php
	/*Template name: Страница контактов*/
?>
<?php get_header();?>
	<!--main-->
	<!--first block-->
	<div class="contact">
		<div class="education">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/office_big.png">
			<h3>КАК С НАМИ СВЯЗАТЬСЯ<br><span>МЫ ВСЕГДА РЯДОМ</span></h3>
			<?php
				while(have_posts()):the_post();?>
			<div class="adr"><?php the_content();?></div>
			<?php
				endwhile;
			?>
		</div>
		<div class="business">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/point_small.png">
			<h3>КАК НАС НАЙТИ<br><span>ПО КАРТЕ</span></h3>
			<p id="map-canvas"></p>
			<a class="contact_a" href="https://www.google.com/maps/place/%D0%B2%D1%83%D0%BB.+%D0%93%D0%B0%D0%B3%D0%B0%D1%80%D1%96%D0%BD%D0%B0,+13,+%D0%A3%D0%B6%D0%B3%D0%BE%D1%80%D0%BE%D0%B4,+%D0%97%D0%B0%D0%BA%D0%B0%D1%80%D0%BF%D0%B0%D1%82%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/@48.609489,22.306034,15z/data=!4m2!3m1!1s0x473919a10380cb3d:0x2cbdc2d1fb450f94?hl=ru-RU">РАСШИРИТЬ</a>
		</div>
		<div class="back_form">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/mail_big.png">
			<h3>НАПЕШИТЕ НАМ<br><span>УЖЕ</span></h3>
			<div class="form2">
				<?php echo do_shortcode('[contact-form-7 id="18" title="Контактная форма (Главная)"]');?>
			</div>
		</div>
	</div>
	<!--end first block-->
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
	<script>
		var map;
		var egglabs = new google.maps.LatLng(48.6091211, 22.30574969999998);
		var mapCoordinates = new google.maps.LatLng(48.6091211, 22.30574969999998);


		var markers = [];
		var image = new google.maps.MarkerImage(
			'images/point_big.png',
			new google.maps.Size(67,106),
			new google.maps.Point(0,0),
			new google.maps.Point(42,56)
		);

		function addMarker()
		{
			markers.push(new google.maps.Marker({
				position: egglabs,
				raiseOnDrag: false,
				icon: image,
				map: map,
				draggable: false
			}));

		}

		function initialize() {
			var mapOptions = {
				zoom: 15,
				disableDefaultUI: true,
				center: mapCoordinates,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				panControl: false,
				zoomControl: false,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			};
			map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
			addMarker();

		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>


</body>
</html>
