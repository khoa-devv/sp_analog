<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>

	<div class="max-w-[865px] px-[15px] mx-auto mb-[30px]">
		<?php
			if (function_exists('bcn_display')) {
				bcn_display();
			}
		?>
	</div>

	<section class="mb-[70px]">
		<div class="max-w-[865px] px-[15px] mx-auto flex gap-[30px]">
			<div class="flex-1">
				<div class="border-b-[1px] border-black pb-[20px] mb-[30px]">
					<div class="flex justify-between items-end mb-[20px]">
						<div class="">
							<?php
								$category = get_category( get_query_var( 'cat' ) );
								$cat_id = $category->cat_ID;
								$value = get_field( 'eng_title', "category_".$cat_id );
							?>
							<span class="text-[13px]"><?php echo $value; ?></span>
							<h2 class="text-[32px] font-bold italic"><?php echo single_cat_title(); ?></h2>
						</div>
					</div>
					<div class="grid grid-cols-2 gap-[30px] mb-[30px]">
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
						?>
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { ?>
								<div class="h-[270px] mb-[20px]">
									<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
								</div>
							<?php } ?>
							<div class="flex items-center gap-[10px]">
								<span class="text-[12px]"><?php echo get_the_date('Y.m.d H:i'); ?></span>
							</div>
							<h3 class="font-bold text-[26px] my-[10px] leading-[1.4] line-clamp-3"><?php the_title(); ?></h3>
						</a>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>

<?php
get_footer();
