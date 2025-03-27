<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>

	<section class="mb-[70px]">
		<div class="max-w-[895px] px-[15px] mx-auto">
			<div class="flex justify-between items-center border-b-[1px] border-black pb-[5px] mb-[30px]">
				<h2 class="text-[28px] font-bold italic">Cover story</h2>
			</div>
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="flex gap-[15px]">
							<div class="w-[330px]">
								<div class="flex items-center gap-[10px]">
									<span class="text-[10px]">2025.02.21 16:00</span>
								</div>
								<h2 class="text-[24px] pb-[25px] mb-[15px] font-bold leading-[1.5] mt-[10px] relative
									[&:after]:content-['']
									[&:after]:absolute
									[&:after]:left-0
									[&:after]:bottom-0
									[&:after]:bg-black
									[&:after]:w-[32px]
									[&:after]:h-[1px]
								">2025年版、高収入が期待できる「修士号」6選</h2>
								<p class="mb-[20px] text-[12px]">2025年に修士課程への進学を考えている人が、ぜひとも検討すべき条件のひとつは、投資対効果だ。結局のところ、自分の名前のあとに修士号取得者を意味する「M.A.」が付くことが、単なる栄誉や、履歴書に箔がつくことしか意味しないのであれば、現実的な価値はな</p>
								<a href="#" class="flex items-center justify-center text-[16px] h-[50px] bg-[#FF8A35] border-black border-[1px] text-black rounded-[10px]">READ MORE</a>
							</div>
							<div class="w-[520px] bg-[#f5f5f5] relative
								[&_img]:absolute
								[&_img]:left-0
								[&_img]:top-0
								[&_img]:right-0
								[&_img]:bottom-0
								[&_img]:m-auto
							">
								<img src="<?php echo get_template_directory_uri(); ?>/img/img.png" />
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<section class="bg-[#f5f5f5] pt-[30px] pb-[50px] mb-[70px]">
		<div class="max-w-[895px] px-[15px] mx-auto">
			<div class="mb-[30px]">
				<span class="bg-black text-[14px] text-white px-[5px] rounded-[4px]">おすすめの記事</span>
				<h2 class="text-[24px] font-bold italic">Recommended artcles</h2>
			</div>
			<div class="grid grid-cols-3 gap-[50px]">
				<?php 
					$new_args = array(
						'posts_per_page' => 3,
						'post__in' => get_option( 'sticky_posts' )
					);
					$new_query = new WP_Query( $new_args );
					if ( $new_query->have_posts() ) :
						while ( $new_query->have_posts() ) : $new_query->the_post();
				?>
				<a href="<?php the_permalink(); ?>">
					<?php if(has_post_thumbnail()) { ?>
					<div class="h-[166px] mb-[10px] relative bg-white
						[&_img]:absolute
						[&_img]:left-0
						[&_img]:top-0
						[&_img]:right-0
						[&_img]:bottom-0
						[&_img]:m-auto
						[&_img]:max-w-auto
						[&_img]:h-full
					">
						<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => '' ) ); ?>
					</div>
					<?php } ?>
					<div class="flex items-center gap-[10px] text-[10px]">
						<span class="text-[12px]"><?php echo get_the_date('Y.m.d H:i'); ?></span>
					</div>
					<h3 class="font-bold text-[18px] mb-[10px] leading-[1.4] line-clamp-3"><?php the_title(); ?></h3>
					<div class="flex flex-wrap gap-[10px] text-[12px]">
						<?php
							$post_tags = get_the_tags();
							if ( $post_tags ) {
								foreach( $post_tags as $tag ) {
						?>
						<span class="underline underline-offset-[5px]">#<?php echo $tag->name; ?></span>
						<?php
								}
							}
						?>
					</div>
				</a>
				<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="mb-[70px]">
		<div class="max-w-[895px] px-[15px] mx-auto flex gap-[20px]">
			<div class="flex-1">
				<div class="border-b-[1px] border-black pb-[20px] mb-[30px]">
					<div class="flex justify-between items-end mb-[20px]">
						<div class="">
							<span class="text-[14px]">Leading Edge</span>
							<h2 class="text-[24px] font-bold italic">トップランナー</h2>
						</div>
						<a href="<?php echo get_category_link(1); ?>" class="flex gap-[5px] justify-center text-[16px]">
							VIEW MORE
							<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
						</a>
					</div>
					<div class="grid grid-cols-2 gap-[20px] mb-[30px]">
						<?php 
							$cat01_args = array(
								'posts_per_page' => 10,
								'cat' => 1,
								'ignore_sticky_posts' => 1
							);
							$cat01_query = new WP_Query( $cat01_args );
							if ( $cat01_query->have_posts() ) :
								while ( $cat01_query->have_posts() ) : $cat01_query->the_post();
						?>
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { ?>
								<div class="h-[175px] mb-[10px] relative bg-white
									[&_img]:absolute
									[&_img]:left-0
									[&_img]:top-0
									[&_img]:right-0
									[&_img]:bottom-0
									[&_img]:m-auto
									[&_img]:max-w-auto
									[&_img]:h-full
								">
								<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => '' ) ); ?>
								</div>
							<?php } ?>
							<div class="flex items-center text-[10px]">
								<span class="text-[10px]"><?php echo get_the_date('Y.m.d H:i'); ?></span>
							</div>
							<h3 class="font-bold text-[18px] mt-[5px] leading-[1.5] line-clamp-3"><?php the_title(); ?></h3>
						</a>
						<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="border-b-[1px] border-black pb-[20px] mb-[30px]">
					<div class="flex justify-between items-end mb-[20px]">
						<div class="">
							<span class="text-[14px]">Media collaboration</span>
							<h2 class="text-[24px] font-bold italic">メディアコラボ</h2>
						</div>
						<a href="<?php echo get_category_link(3); ?>" class="flex gap-[5px] justify-center">
							VIEW MORE
							<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
						</a>
					</div>
					<div class="grid grid-cols-2 gap-[30px] mb-[30px]">
						<?php 
							$cat03_args = array(
								'posts_per_page' => 10,
								'cat' => 3,
								'ignore_sticky_posts' => 1
							);
							$cat03_query = new WP_Query( $cat03_args );
							if ( $cat03_query->have_posts() ) :
								while ( $cat03_query->have_posts() ) : $cat03_query->the_post();
						?>
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { ?>
								<div class="h-[175px] mb-[10px] relative bg-white
									[&_img]:absolute
									[&_img]:left-0
									[&_img]:top-0
									[&_img]:right-0
									[&_img]:bottom-0
									[&_img]:m-auto
									[&_img]:max-w-auto
									[&_img]:h-full
								">
								<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => '' ) ); ?>
								</div>
							<?php } ?>
							<div class="flex items-center">
								<span class="text-[10px]"><?php echo get_the_date('Y.m.d H:i'); ?></span>
							</div>
							<h3 class="font-bold text-[18px] mt-[5px] leading-[1.5] line-clamp-3"><?php the_title(); ?></h3>
						</a>
						<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>

	<section class="mb-[70px]">
		<div class="max-w-[895px] px-[15px] mx-auto">
			<h2 class="mb-[50px]">
				<img src="<?php echo get_template_directory_uri(); ?>/img/work-title.png" class="w-[290px] mx-auto">
			</h2>
			<div class="bg-[url(/flh/wp-content/themes/analog/theme/img/work-bg.jpg)] pt-[50px] px-[20px]">
				<div class="grid grid-cols-3 gap-[15px] mb-[20px]">
					<?php 
						$cat04_args = array(
							'posts_per_page' => 3,
							'cat' => 4,
							'ignore_sticky_posts' => 1
						);
						$cat04_query = new WP_Query( $cat04_args );
						if ( $cat04_query->have_posts() ) :
							while ( $cat04_query->have_posts() ) : $cat04_query->the_post();
					?>
					<a href="<?php the_permalink(); ?>">
						<?php if(has_post_thumbnail()) { ?>
							<div class="h-[140px] relative bg-white
									[&_img]:absolute
									[&_img]:left-0
									[&_img]:top-0
									[&_img]:right-0
									[&_img]:bottom-0
									[&_img]:m-auto
									[&_img]:max-w-auto
									[&_img]:h-full">
								<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => '' ) ); ?>
							</div>
						<?php } ?>
						<h3 class="font-bold text-[18px] mt-[5px] leading-[1.5] line-clamp-2"><?php the_title(); ?></h3>
					</a>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
			<a href="<?php echo get_category_link(4); ?>" class="bg-black flex justify-center items-center text-white mx-auto w-[223px] h-[41px] text-[16px] leading-1">
				VIEW MORE
				<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
			</a>
		</div>
	</section>

	<section class="bg-[#f5f5f5] py-[50px]">
		<div class="max-w-[895px] px-[15px] mx-auto">
			<div class="mb-[30px]">
				<span class="text-[14px]">Special Issue</span>
				<h2 class="text-[24px] font-bold italic">スペシャルイシュー</h2>
			</div>
			<div class="grid grid-cols-5 gap-[15px] mb-[30px]">
				<?php 
					$cat04_args = array(
						'posts_per_page' => 5,
						'cat' => 5,
						'ignore_sticky_posts' => 1
					);
					$cat04_query = new WP_Query( $cat04_args );
					if ( $cat04_query->have_posts() ) :
						while ( $cat04_query->have_posts() ) : $cat04_query->the_post();
				?>
				<a href="<?php the_permalink(); ?>">
					<?php if(has_post_thumbnail()) { ?>
						<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => '' ) ); ?>
					<?php } ?>
					<h3 class="font-bold text-[18px] leading-[1.5]"><?php the_title(); ?></h3>
				</a>
				<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<a href="<?php echo get_category_link(4); ?>" class="bg-black flex justify-center items-center text-white mx-auto w-[223px] h-[41px] text-[16px] leading-1">
				VIEW MORE
				<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
			</a>
		</div>
	</section>

<?php
get_footer();
