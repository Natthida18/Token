<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package token-v2
 */

get_header();
$current_lang = apply_filters( 'wpml_current_language', null );
?>
<main>
	<?php
	if ( 'th' === $current_lang ) {
		?>
		<div>
			<div class="container">
				<div class="breadcrumbs">
					<div class="inner">
						<?php
						if ( function_exists( 'bcn_display' ) ) {
							bcn_display();
						}
						?>
					</div>
					<?php get_template_part( 'fb_share' ); ?>
				</div>
			</div>
			<div class="page page-tips">
				<div class="container">
					<div class="row section">
						<div class="pagetitle">
							<h1><?php the_archive_title(); ?></h1>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="d-flex d-xs-block tips_main">
						<div class="_r1">
							<h4>
								<?php echo esc_html( 'หมวดหมู่', 'token-v2' ); ?>
							</h4>
							<ul class="tips_sidemenu nav">
								<li>
									<a href="#" title="" class="box01 tips_filter_button _active" data-target=".tips_index_box" data-filter="">
										<span class="_img"></span><span class="_text"><?php echo esc_html_e( 'บทความทั้งหมด', 'token-v2' ) ?></span>
									</a>
								</li>
								<li>
									<a href="#" title="" class="box01 tips_filter_button" data-target=".tips_index_box" data-filter="._category_skymaster">
										<span class="_img">
											<img src="/wp-content/themes/token-v2/assets/assets/images/menu2-1_th-xs.png">
										</span>
										<span class="_text">
											<?php echo esc_html( 'รถกระเช้า', 'token-v2' ); ?>
											<span style="font-size:1.0rem">
												<br>
												<?php echo esc_html_e( '(SKYMASTER)', 'token-v2' ); ?>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#" title="" class="box01 tips_filter_button" data-target=".tips_index_box" data-filter="._category_boom_lift">
										<span class="_img">
											<img src="/wp-content/themes/token-v2/assets/assets/images/menu2-3_th-xs.png">
										</span>
										<span class="_text">
											<?php echo esc_html_e( 'บูมลิฟท', 'token-v2' ); ?>
											<span style="font-size:1.0rem">
												<br>
												<?php echo esc_html_e( '(BOOM LIFT)', 'token-v2' ); ?>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#" title="" class="box01 tips_filter_button " data-target=".tips_index_box" data-filter="._category_scissors_lift">
										<span class="_img">
											<img src="/wp-content/themes/token-v2/assets/assets/images/menu2-4_th-xs.png">
										</span>
										<span class="_text">
											<?php echo esc_html_e( 'ขากรรไกร X-Lift', 'token-v2' ); ?>
											<span style="font-size:1.0rem">
												<br>
												<?php echo esc_html_e( '(SCISSORS LIFT)', 'token-v2' ); ?>
											</span>
										</span>
									</a>
								</li>
							</ul>
						</div>

						<div class="_r2">
							<div class="row" id="tips_container">
								<?php
								while ( have_posts() ) {
										the_post();
										$ss_category = get_field( 'ss_category' );
										$ss_picture  = get_field( 'ss_picture' );
									?>
										<div class="col-sm-6 col-md-4 tips_index_box <?php foreach ( $ss_category as $i => $item ) { echo esc_html( '_category_' . $item['value'] . ' ' ); } ?>
										">
											<div class="_tag">
												<?php
												foreach ( $ss_category as $i => $item ) {
													echo esc_html( $item['label'] ) . ' ';
												}
												?>
											</div>
											<h3 class="_title h4">
												<?php the_title(); ?>
											</h3>
											<div class="_img">
												<a href="<?php the_permalink(); ?>">
													<?php echo wp_get_attachment_image( $ss_picture, array( '300', '212' ), false, array( 'class' => 'img-responsive' ) ); ?>
												</a>
											</div>
											<div class="_description">
												<?php echo get_the_excerpt(); ?>
											</div>
											<div class="_more">
												<a href="<?php the_permalink(); ?>">
													<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/tips_more.png' ) ); ?>" alt="more"  width="89" height="37" />
												</a>
											</div>
										</div>
										<?php
								}
								?>
							</div>
							<div class="pagination">
								<?php
								the_posts_pagination(
									array(
										'mid_size'  => 2,
										'prev_text' => esc_html__( 'ก่อนหน้า', 'unixdev' ),
										'next_text' => esc_html__( 'ถัดไป', 'unixdev' ),
									)
								);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	} else {
		?>
		<div class="page page-tips">
			<div class="container">
				<div class="breadcrumbs">
					<div class="inner">
						<?php
						if ( function_exists( 'bcn_display' ) ) {
							bcn_display();
						}
						?>
					</div>
					<?php get_template_part( 'fb_share' ); ?>
				</div>
				<div class="row section">
					<div class="pagetitle">
						<h1><?php the_archive_title(); ?></h1>
					</div>
				</div>
			</div>
			<p><!-- 用語ここから --></p>
			<div id="tips01"> </div>
			<div class="tips_box">
				<h2	class="tips_stit">送・配電線付近の作業時の留意事項</h2>
				<div class="tips_box_l">
					<h3 class="tips_sstit">■ FRPバケットについて</h3>
						<ol>
							<li>高所作業車にはFRPと鉄製のバケットがあります。FRPは耐電圧素材ですが、感電を完璧に防ぐわけではありません。</li>
							<li>そのためFRPバケットを用いても、直接電線に接触できるわけではありません。十分な距離を保つか、完璧に電源をおとして作業してください。</li>
							<li>送電線付近は目に見えない高圧な電気が放電されており、非常に危険です。高電圧電線に近づくだけで感電します。</li>
						</ol>
						<h3 class="tips_sstit">■ アース棒について</h3>
						<ol>
							<li>高所作業車は直接電線に触れなくても、送電線に近づくことにより車体に電気が溜まります。この時に地上の人が車両に触れたときに感電する場合があります。</li>
							<li>アース棒を設置することにより、車体に溜まった電気を地面に放電させやすくします。</li>
						</ol>
					<p>※電気工事に関し、万が一、感電事故などが起きてもトーケンは責任を負いかねます。</p>
				</div>
				<div class="tips_box_r">
					<div class="tips_img">
						<div class="tips_img_point"> </div>
							<p><a href="/wp-content/themes/token-v2/assets/images/tips_img01_j.jpg"><img src="/wp-content/themes/token-v2/assets/images/tips_img01_j.jpg" alt="" /></a></p>
						</div>
						<div class="tips_btn_dl">
							<a href="/wp-content/themes/token-v2/assets/images/tips_dl01_j.pdf">
								DOWNLOAD PDF
							</a>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<p><!-- end tips_box --><br /><!-- 用語ここまで --></p>
				<p><!-- 用語ここから --></p>
				<div id="tips02"> </div>
				<div class="tips_box">
					<h2 class="tips_stit">
						タイヤを養生する方法
					</h2>
				<div class="tips_box_l">
					<h3 class="tips_sstit">
						■ブームリフトやシザーズリフトを精密工場のクリーンルームや高級デパートなどでご利用いただく場合、タイヤをブルーシートで養生しないといけないケースが多々あります。弊社も有償でサービスを提供しておりますが、お客様からの要望を受け、養生の手順を纏めましたので、活用して頂けたら幸いです。
					</h3>
					<p>Cut the length 2.5m, Prepare 2 ropes 3.5m/each, treat the edge with lighter, Fold in three and each width 60cm and put two ropes though inside, Move boom lift to the center of the sheet, Middle position as shown, Bring a sheet to cover the tire,<br />Make holes in the sheet so that you can tighten the sheet, String the rope into the hole,<br />Tie as tight as possible like a star shape, On the back side, tie loosely so that wheel can go around smoothly</p>
				</div>
				<div class="tips_box_r">
					<div class="tips_img">
						<div class="tips_img_point"> </div>
						<p><a href="/wp-content/themes/token-v2/assets/images/tips_img02_j.jpg"><img src="/wp-content/themes/token-v2/assets/images/tips_img02_j.jpg" alt="" /></a></p>
					</div>
					<div class="tips_btn_dl"><a href="/wp-content/themes/token-v2/assets/images/tips_dl02_j.pdf">DOWNLOAD PDF</a></div>
				</div>
				<div class="clear"> </div>
			</div>

			<div id="tips03"> </div>
			<div class="tips_box">
				<h2 class="tips_stit">
					ブームリフト、シザーズリフトの安全手引き
				</h2>
				<div class="tips_box_l">
					<h3 class="tips_sstit">■ ブームリフトとシザーズリフトは、誰でも操作できるように設計されています。そのため世界中の多くの建設現場で利用されておりますが、事故が多発しています。この安全手引きを用いて、注意喚起して頂けたら幸いです。</h3>
					<p>地面が傾いている場所では使用できません。強風時に高所で作業すると転倒する危険があります。<br />ぬかるんだ場所など、地盤が不安定な場所では使用できません。高所作業車はクレーンと違い物を吊り上げるようには設計されていません。リフトの積載重量を超えると非常に危険です。（ブームリフトの目安227キロ）リフトをよじ登ることを禁止します。電線の近くで作業すると、触れていなくても感電します。少なくとも3m以上離れて作業してください。</p>
				</div>
				<div class="tips_box_r">
					<div class="tips_img">
					<div class="tips_img_point"> </div>
						<p><a href="/wp-content/themes/token-v2/assets/images/tips_img03_j.jpg"><img src="/wp-content/themes/token-v2/assets/images/tips_img03_j.jpg" alt="" /></a></p>
					</div>
					<div class="tips_btn_dl">
						<a href="/wp-content/themes/token-v2/assets/images/tips_dl03_j.pdf">
							DOWNLOAD PDF
						</a>
					</div>
				</div>
				<div class="clear"> </div>
			</div>

			<div id="tips04"> </div>
			<div class="tips_box">
				<h2 class="tips_stit">トラック式高所作業車-傾斜地での設置と格納方法</h2>
				<div class="tips_box_l">
					<h3 class="tips_sstit">■ トラック式高所作業車を傾斜地へ設置する場合は、平坦地異常に安全に対する配慮が必要です。　対応を誤ると思わぬ災害や事故につながります。傾斜地での作業に際しては「傾斜地での位置決め」「アウトリガーの設置」「アウトリガーの格納」に関する基本事項を十分に理解した上で正しい取り扱いをしましょう</h3>
					<ol>
						<li>傾斜地での作業では、車両を必ず前下がりに位置決めする。駐車ブレーキを確実にかけ、歯止めを全輪の坂下川にかける。地形、地盤が悪い場所では、十分養生してから設置する。</li>
						<li>ジャッキセットは、駐車ブレーキ、歯止めを確実にした後、必ず前ジャッキから後ジャッキの順に行う。ジャッキセットは、左右同時に作動させる。4本のアウトリガーを作業条件に合わせて張り出し、機体は水平になるようにジャッキアップする。敷物は、安全性のあるものを使用する。</li>
						<li>アウトリガーを格納するときは、作業床を走行姿勢に戻す。歯止めの位置を確認し、ずれている場合には修正する。会う鳥がの格納は、まず後ジャッキから前ジャッキの順に行う。ジャッキは左右同時に作動する。</li>
					</ol>
				</div>
				<div class="tips_box_r">
					<div class="tips_img">
						<div class="tips_img_point"> </div>
						<p><a href="/wp-content/themes/token-v2/assets/images/tips_img04_j.jpg"><img src="/wp-content/themes/token-v2/assets/images/tips_img04_j.jpg" alt="" /></a></p>
					</div>
					<div class="tips_btn_dl">
						<a href="/wp-content/themes/token-v2/assets/images/tips_dl04_j.pdf">
							DOWNLOAD PDF
						</a>
					</div>
				</div>
				<div class="clear"> </div>
			</div>

			<div id="tips05"> </div>
			<div class="tips_box">
				<h2 class="tips_stit">トラック式高所作業車- 安全マニュアル</h2>
				<div class="tips_box_l">
					<h3 class="tips_sstit">■ 屋外で作業する高所作業車にあっては、現場の環境に応じた対応が不可欠です。天候、電線、地盤、ほかの交通車両などを考慮し、作業にあたってください。天候については、風は上空ほど強く吹いています。また雨が降れば視界が悪くなり、落雷の可能性も高まり、地盤も弱くなります。また事故を未然に防ぐためにも、安全教育を徹底することが重要なポイントです。</h3>
					<ol>
						<li>落下物の危険があるので、安全スペースを確保してください</li>
						<li>電線近くの作業は非常に危険です。少なくとも3m以上離れてください</li>
						<li>地盤が緩い場所では転倒する可能性が高いです</li>
						<li>強風時は速やかに作業を中止してください</li>
						<li>雷がバケットに落ちることがあります</li>
						<li>大雨の際、視界が悪くなり事故が起こりやすくなります</li>
						<li>積載重量200キロを超えてはいけません</li>
						<li>バケットから乗り移ると足場が滑り落下かもしれません</li>
						<li>高さ4m以下のトンネルは通行禁止です</li>
						<li>排水路の上にアウトリガーを設置すると割れます</li>
						<li>雨が降った翌日は、芝生に踏み入れただけでタイヤ痕がのこります</li>
						<li>マンホールの上にアウトリガーを設置すると割れます</li>
						<li>道路から建設現場に架かった木製の橋は強度が非常に弱いです</li>
						<li>悪路での作業は避けてください</li>
						<li>高所作業車は、物を吊り上げるようには設計されておりません</li>
					</ol>
				</div>
				<div class="tips_box_r">
					<div class="tips_img">
						<div class="tips_img_point"> </div>
						<p><a href="/wp-content/themes/token-v2/assets/images/tips_img05_j.jpg"><img src="/wp-content/themes/token-v2/assets/images/tips_img05_j.jpg" alt="" /></a></p>
					</div>
					<div class="tips_btn_dl">
						<a href="/wp-content/themes/token-v2/assets/images/tips_dl05_j.pdf">
							DOWNLOAD PDF
						</a>
					</div>
				</div>
				<div class="clear"> </div>
			</div>

			<div id="tips06"> </div>
			<div class="tips_box">
				<h2 class="tips_stit">高所作業車 - 基本的な操作方法</h2>
					<div class="tips_box_l">
						<ol>
							<li>安全な駐車位置を確保し、ギアをニュートラルに、パーキングブレーキを引き、PTOレバーを入れます。走行時は必ずPTOを切って下さい</li>
							<li>PTOが入ると、エンジン横のシャフトが回転し始め、作動油ポンプが動き始めます。</li>
							<li>走行車両に注意しながら、片側ずつアウトリガーを張りだします。</li>
							<li>地面を傷つけないようにベースマットを敷いてから、アウトリガーを出します。</li>
							<li>パーキングブレーキは後輪をロックするため、前方のアウトリガーから出します。</li>
							<li>インジケーターにて張り出し幅と設地状態を確認します。もし設地されていな場合は、点滅し、上部操作ができません。</li>
							<li>起伏、旋回、伸縮の順で操作してください。ブームを伸ばした状態で旋回すると遠心力が働き、バケットが大きく揺れることがあります。</li>
							<li>緊急停止スイッとを押すと全ての操作が不可になります。もし危ないと感じた際は、いち早くスイッとを押し中断してください。</li>
							<li>高所作業車には予備のモーターがあります。ガス欠やエンジントラブルなどの際、活用してください</li>
							<li>ブームを格納していない状態では、アウトリガーを操作できません。</li>
							<li>トラックは前方にエンジンがあるため重く、後方にブームを旋回して作業することをお勧めいたします</li>
							<li>アウトリガーを格納する際は、後方から前方の順に行ってください。順序を間違えると車体が滑りだす危険性があります。</li>
						</ol>
					</div>
					<div class="tips_box_r">
						<div class="tips_img">
							<div class="tips_img_point"> </div>
							<p><a href="/wp-content/themes/token-v2/assets/images/tips_img06_j.jpg"><img src="/wp-content/themes/token-v2/assets/images/tips_img06_j.jpg" alt="" /></a></p>
						</div>
						<div class="tips_btn_dl">
							<a href="/wp-content/themes/token-v2/assets/images/tips_dl06_j.pdf">
								DOWNLOAD PDF
							</a>
						</div>
					</div>
					<div class="clear"> </div>
			</div>
		</div>
		<?php
	}
	?>
</main>
<?php
get_footer();
