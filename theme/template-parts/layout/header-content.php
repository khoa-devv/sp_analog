<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<header class="mb-[30px]">

	<div class="py-[20px] relative flex justify-center">
		<a href="#">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="w-[460px]">
		</a>
		<div class="absolute right-[15px] flex items-center">
			<a href="#" class="text-[16px]">
				お問い合せ
			</a>
			<div class="border-[1px] border-[#000] ml-[20px]">
				<form class="flex">
					<input type="text" name="s" class="text-[16px] outline-0 p-[5px]">
					<button type="submit" class="bg-[#FF8A35] w-[80px] h-[35px] flex justify-center items-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="18.475" height="18.475" viewBox="0 0 18.475 18.475">
							<path id="Icon_akar-search" data-name="Icon akar-search" d="M19.664,19.664,15.73,15.723m2.18-5.268A7.455,7.455,0,1,1,10.455,3a7.455,7.455,0,0,1,7.455,7.455Z" transform="translate(-2.25 -2.25)" fill="none" stroke="#000000" stroke-linecap="round" stroke-width="1.5"></path>
						</svg>
					</button>
				</form>
			</div>
		</div>
	</div>

	<nav class="navigation bg-[#000]
		[&_a]:py-[10px]
		[&_a]:block
		[&_li]:relative
		[&_li:after]:content-['|']
		[&_li:after]:leading-[100%]
		[&_li:after]:absolute
		[&_li:after]:top-[50%]
		[&_li:after]:right-[-30px]
		[&_li:after]:translate-[-50%]
		[&_li:after]:h-[20px]

		[&_li:first-child:before]:content-['|']
		[&_li:first-child:before]:leading-[100%]
		[&_li:first-child:before]:absolute
		[&_li:first-child:before]:top-[50%]
		[&_li:first-child:before]:left-[-30px]
		[&_li:first-child:before]:translate-[-50%]
		[&_li:first-child:before]:h-[20px]
	">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container'       => false,
					'container_id'    => '',
					'menu_class'     => 'flex justify-center items-center gap-[40px] text-white',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
		?>
	</nav>

</header><!-- #masthead -->
