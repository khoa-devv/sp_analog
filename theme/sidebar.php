<div class="max-[1023px]:mt-[30px] min-[1024px]:w-[194px]">
  <div class="mb-[30px]
    [&_li]:py-[10px]
    [&_li]:border-b-[2px]
    [&_li]:border-black
    [&_li]:relative
    [&_li:before]:content-['']
    [&_li:before]:absolute
    [&_li:before]:w-[60px]
    [&_li:before]:h-[2px]
    [&_li:before]:bg-[#FF8A35]
    [&_li:before]:left-0
    [&_li:before]:bottom-[-2px]
    [&_a]:flex
    [&_a]:justify-between
  ">
    <h3 class="text-[16px] mb-[10px]">CATEGORY</h3>
    <ul>
      <?php
        $categories = get_categories( array(
          'hide_empty' => false,
        ) );
        
        foreach ( $categories as $category ) {
      ?>
      <li>
        <a href="<?php echo get_category_link( $category->term_id ); ?>">
          <?php echo $category->name; ?>
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </li>
      <?php } ?>
    </ul>
  </div>
  <div class="mb-[30px]">
    <h3 class="text-[16px] mb-[10px]">KEYWORD</h3>
    <div class="flex flex-col gap-[10px]">
      <?php
        $tags = get_tags();
        foreach ( $tags as $tag ) {
      ?>
      <span class="text-[20px]">#<?php echo $tag->name; ?></span>
      <?php } ?>
    </div>
  </div>
  <div class="mb-[30px] bg-[#f5f5f5] py-[20px] px-[15px]">
    <h3 class="text-[18px] mb-[15px]">SEARCH | 記事をさがず</h3>
    <div class="border-[1px] border-black">
      <form class="flex">
        <input type="text" name="s" class="text-[16px] outline-0 p-[5px] flex-1 w-[120px]">
        <button type="submit" class="bg-[#FF8A35] w-[80px] h-[35px] flex justify-center items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="18.475" height="18.475" viewBox="0 0 18.475 18.475">
            <path id="Icon_akar-search" data-name="Icon akar-search" d="M19.664,19.664,15.73,15.723m2.18-5.268A7.455,7.455,0,1,1,10.455,3a7.455,7.455,0,0,1,7.455,7.455Z" transform="translate(-2.25 -2.25)" fill="none" stroke="#000000" stroke-linecap="round" stroke-width="1.5"></path>
          </svg>
        </button>
      </form>
    </div>
  </div>
  <div>
    <h3 class="text-[32px] font-bold italic mb-[30px]">RANKING / TOP5</h3>
    <div class="grid grid-cols-1 gap-[20px]">
      <?php
        $popular_posts_query = new WP_Query( array(
          'posts_per_page' => 5, 
          'meta_key' => 'custom_post_views_count',
          'orderby' => 'meta_value_num',
          'order' => 'DESC'
        ));
        if ( $popular_posts_query->have_posts() ) :
          while ( $popular_posts_query->have_posts() ) : $popular_posts_query->the_post();
      ?>
      <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()) { ?>
          <div class="h-[200px] mb-[20px]">
            <?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
          </div>
        <?php } ?>
        <div class="flex items-center gap-[10px]">
          <span class="text-[12px]"><?php echo get_the_date('Y.m.d H:i'); ?></span>
        </div>
        <h3 class="font-bold text-[26px] my-[10px] leading-[1.4] line-clamp-3"><?php the_title(); ?></h3>
      </a>
      <?php endwhile; wp_reset_postdata(); ?>
			<?php endif; ?>
    </div>
  </div>
</div>