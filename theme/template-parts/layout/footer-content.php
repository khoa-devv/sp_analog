<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<footer id="colophon" class="bg-[#FF8A35] px-[50px] pt-[50px] pb-[30px] mt-[100px]">
	<a href="<?php echo home_url(); ?>" class="mb-[30px] block">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="w-[400px]">
	</a>
	<div class="flex gap-[30px] [&_li]:py-[5px]">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer-1',
					'container'       => false,
					'container_id'    => '',
					'menu_class'     => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
		?>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer-2',
					'container'       => false,
					'container_id'    => '',
					'menu_class'     => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s<li class="flex gap-[5px] [&_img]:w-[15px] [&_img]:h-[15px] mt-[5px]"><a href="#"><img src="'. get_template_directory_uri() .'/img/icon-fb.svg" /></a><a href="#"><img src="'.get_template_directory_uri().'/img/icon-lnk.svg" /></a><a href="#"><img src="'. get_template_directory_uri() .'/img/icon-x.svg" /></a> <a href="#"><img src="'. get_template_directory_uri() .'/img/icon-ins.svg" /></a><a href="#"><img src="'. get_template_directory_uri() .'/img/icon-tt.svg" /></a><a href="#"><img src="'. get_template_directory_uri() .'/img/icon-ytb.svg" /></a></li></ul>',
				)
			);
		?>
		<!-- <ul>
			<li><a href="#">メディアについて</a></li>
			<li><a href="#">ニュースレター登録</a></li>
			<li class="flex gap-[5px] [&_img]:w-[15px] [&_img]:h-[15px] mt-[5px]">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-fb.svg" /></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-lnk.svg" /></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-x.svg" /></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-ins.svg" /></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-tt.svg" /></a>
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-ytb.svg" /></a>
			</li>
		</ul> -->
	</div>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-footer-3',
				'container'       => false,
				'container_id'    => '',
				'menu_class'     => 'flex gap-[10px] mt-[10px]',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			)
		);
	?>
	<p class="text-center mt-[50px]">Copyright © 2025 Analog PR Inc. All Rights Reserved.</p>
</footer><!-- #colophon -->
