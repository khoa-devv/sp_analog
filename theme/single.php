<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _tw
 */

get_header();
custom_set_post_views(get_the_ID());
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
				<div class="flex items-center gap-[10px] mb-[20px]">
					<span class="text-[12px]">2025.02.21 16:00</span>
				</div>
				<h1 class="text-[33px] font-bold mb-[30px]">Z世代だけのものじゃない。「界隈消費」がトレンドに？Z世代だけのものじゃない。「界隈消費」がトレンドに？Z世代だけのものじゃない。「界隈消費」がトレンドに？</h1>
				<div class="flex justify-between pb-[10px] border-black border-b-[1px] mb-[20px]">
					<a href="<?php echo get_author_posts_url($post->post_author); ?>" class="flex items-center gap-[10px]">
						<img src="<?php echo get_avatar_url($post->post_author, ['size' => '120']); ?>" class="w-[60px]">
						<?php echo get_field( 'user_display_name', 'user_'.$post->post_author ); ?>
					</a>
					<div class="flex gap-[10px] items-center">
						SHARE
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-x-2.png" class="w-[30px]"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-fb-2.png" class="w-[30px]"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-line-2.png" class="w-[30px]"></a>
					</div>
				</div>
				<div class="
					[&_p]:mb-[1em]

					[&_h2]:mb-[1em]
					[&_h2]:text-[20px]
					[&_h2]:font-bold
					[&_h2]:border-black
					[&_h2]:border-l-[5px]
					[&_h2]:pl-[20px]
					[&_h2]:mt-[50px]
				">
					<p><img src="<?php echo get_template_directory_uri(); ?>/img/img-s.png" class=""></p>
					<p><strong>人口減少時代に突入し、これまで整備・保守されることが当たり前だった日本の公共インフラストラクチャーを取りまく環境に変化が起こっている。持続可能性が危ぶまれる状況に立ち向かうべく、JR西日本やNTTコミュニケーションズ（以下、NTT Com）など民間企業6社による総合インフラマネジメント事業として立ち上がった「JCLaaS（ジェイクラース）」。その背景と社会的な意義について、プロジェクトの中心を担うJR西日本の常松雄大と山本陽斗、NTT Com関西支社の中芝考秀と伊藤大樹に話を聞いた。</strong></p>
					<h2>民間のアセットを社会課題の解決に活用</h2>
					<p>人口減少に伴う労働力不足や経年による施設・設備の老朽化により、これまで盤石だった日本の公共インフラに翳りが見え始めている。そうした課題に対して、民間のアセットを活用して抜本的な解決を目指しているのが総合インフラマネジメント事業「JCLaaS」だ。<br><br>

					プロジェクトの中心を担うのは、鉄道事業で培ったインフラ管理・運営能力を有するJR西日本と、通信インフラ事業で培ったデジタル化・DX推進能力を有するNTT Com。ここに大手金融機関4社※が加わり、社会インフラサービスのプラットフォーマーとして「最適化の計画策定」「資金アレンジ」「DXの推進」に至るまで、社会インフラの最適化のために必要な機能を総合的に担い、インフラマネジメントのモデルチェンジを図る。事業構想が立ち上がった当時の背景について、JR西日本ビジネスデザイン部JCLaaS事業部担当部長の常松雄大（以下、常松）は次のように振り返る。<br>
					※みずほ銀行、三井住友銀行、三菱UFJ銀行、日本政策投資銀行<br><br>

					「コロナ禍において鉄道の需要が失われたことが、『移動』に依拠した当社の事業ポートフォリオを見直す大きな契機となりました。アフターコロナの世界を見据えて、私たちは世の中に対して、どのような価値を提供できるのか。そうした未来像を議論する中で『人、まち、社会のつながりを進化させ、心を動かす。未来を動かす。』というパーパスを定めました」</p>

					<p><img src="<?php echo get_template_directory_uri(); ?>/img/img-s.png" class=""></p>

					<p>
					人口減少に伴う労働力不足や経年による施設・設備の老朽化により、これまで盤石だった日本の公共インフラに翳りが見え始めている。そうした課題に対して、民間のアセットを活用して抜本的な解決を目指しているのが総合インフラマネジメント事業「JCLaaS」だ。<br><br>

					プロジェクトの中心を担うのは、鉄道事業で培ったインフラ管理・運営能力を有するJR西日本と、通信インフラ事業で培ったデジタル化・DX推進能力を有するNTT Com。ここに大手金融機関4社※が加わり、社会インフラサービスのプラットフォーマーとして「最適化の計画策定」「資金アレンジ」「DXの推進」に至るまで、社会インフラの最適化のために必要な機能を総合的に担い、インフラマネジメントのモデルチェンジを図る。事業構想が立ち上がった当時の背景について、JR西日本ビジネスデザイン部JCLaaS事業部担当部長の常松雄大（以下、常松）は次のように振り返る。<br>
					※みずほ銀行、三井住友銀行、三菱UFJ銀行、日本政策投資銀行<br><br>

					「コロナ禍において鉄道の需要が失われたことが、『移動』に依拠した当社の事業ポートフォリオを見直す大きな契機となりました。アフターコロナの世界を見据えて、私たちは世の中に対して、どのような価値を提供できるのか。そうした未来像を議論する中で『人、まち、社会のつながりを進化させ、心を動かす。未来を動かす。』というパーパスを定めました」

					Promoted by 東京都 | text by Nao Arai（Analog PR）| edited by Ryuji Muratsugi（FUSOSHA）

					</p>

					<div class="">
						KEYWORD: 
						<?php
							$post_tags = get_the_tags();

							if ( $post_tags ) {
								foreach( $post_tags as $tag ) {
						?>
						#<?php echo $tag->name; ?>
						<?php
								}
							}
						?>
					</div>


					<h2>あなたにおすすめの記事</h2>
					<div class="grid grid-cols-4 gap-10">
						<?php
							$terms = get_the_terms( $post->ID, 'category' );

							if ( empty( $terms ) ) $terms = array();

							$term_list = wp_list_pluck( $terms, 'slug' );

							$related_args = array(
								'post_type' => 'post',
								'posts_per_page' => 8,
								'post__not_in' => array( $post->ID ),
								'orderby' => 'rand',
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field' => 'slug',
										'terms' => $term_list
									)
								)
							);

							$my_query = new WP_Query($related_args);
							while ($my_query->have_posts()) : $my_query->the_post();
						?>
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) { ?>
								<div class="h-[150px] mb-[10px]">
									<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
								</div>
							<?php } ?>
							<h3 class="font-bold text-[18px] leading-[1.4] line-clamp-3"><?php the_title(); ?></h3>
						</a>
						<?php endwhile; ?>
        		<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>

<?php
get_footer();
