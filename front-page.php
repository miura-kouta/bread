<?php get_header(); ?>
<main>
  <div id="first-view" class="first-view__container">
    <div class="first-view__wrap">
      <div class="first-view__item--bg">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/first-view.png"
          alt="ファーストビュー"
          class="first-view__thumb--bg"
          width="1920"
          height="920"
          decoding="async" />
      </div>
      <p class="first-view__text">パンを食べて2525に<br class="first-view__br--sp">なってほしいから</p>
      <p class="first-view__text">素材にこだわって<br class="first-view__br--sp">作っています</p>
    </div>
  </div>
  <section
    id="commit"
    class="commit__container--whole common__margin-lr common__margin-tb">
    <div class="commit__container--flex">
      <a href="#" class="commit__link--notice fade-in fade-in-up">
        <h3 class="commit__title--notice ">お知らせ</h3>
        <div class="commit__wrap--notice">
          <time datetime="2022-12-20 ">2022.12.20</time>
          <p class="commit__text--entry">クリスマスマフィン登場しました</p>
        </div>
        <div class="commit__box--notice">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/commit1.png"
            alt="矢印"
            class="commit__thumb--arrow"
            width="121"
            height="41"
            decoding="async" />
          <p class="commit__text--more">more</p>
        </div>
      </a>

      <div class="commit__container--obsession fade-in fade-in-up">
        <div class="commit__box--obsession">
          <div class="commit__wrap--title">
            <h2 class="commit__text--title common__title-style">私たちのこだわり</h2>
          </div>
          <p class="commit__text--obsession">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
          <button
            class="commit__button--obsession common__button--style common__button--style-hover"
            onclick="location.href='#'"
            type="button"
            name="more"
            value="more">
            more
          </button>
        </div>
        <div class="commit__pic--obsession">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/commit2.png"
            alt="パンのこだわり"
            class="commit__thumb--obsession"
            width="369"
            height="680"
            decoding="async" />
        </div>
      </div>
    </div>
  </section>
  <section
    id="best"
    class="best__container--whole common__margin-lr common__margin-tb ">
    <div class="best__wrap-title fade-in fade-in-up">
      <h2 class="best__text-title common__title-style">
        おすすめ商品、定番商品
      </h2>
    </div>
    <ul class="best__container--primary fade-in fade-in-up">
      <li class="best__wrap--primary">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/best1.png"
          alt="定番のパンその１"
          class="best__thumb--primary"
          width="369"
          height="556"
          decoding="async" />
        <div class="best__box--primary">
          <h3 class="best__title--primary">メロンパン</h3>
          <p class="best__text-price--primary">100円</p>
          <p class="best__text-explanation--primary">
            ここにテキストが入ります。 ここにテキストが入ります。
            ここにテキストが入ります。
          </p>
        </div>
      </li>
      <li class="best__wrap--primary">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/best2.png"
          alt="定番のパンその２"
          class="best__thumb--primary"
          width="369"
          height="556"
          decoding="async" />
        <div class="best__box--primary">
          <h3 class="best__title--primary">食パン</h3>
          <p class="best__text-price--primary">400円</p>
          <p class="best__text-explanation--primary">
            ここにテキストが入ります。 ここにテキストが入ります。
            ここにテキストが入ります。
          </p>
        </div>
      </li>
      <li class="best__wrap--primary">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/best3.png"
          alt="定番のパンその３"
          class="best__thumb--primary"
          width="369"
          height="556"
          decoding="async" />
        <div class="best__box--primary">
          <h3 class="best__title--primary">ウインナーパン</h3>
          <p class="best__text-price--primary">400円</p>
          <p class="best__text-explanation--primary">
            ここにテキストが入ります。 ここにテキストが入ります。
            ここにテキストが入ります。
          </p>
        </div>
      </li>
    </ul>
    <button
      class="best__button--more common__button--style common__button--style-hover "
      onclick="location.href='#'"
      type="button"
      name="more"
      value="more">
      more
    </button>
  </section>
  <section
    id="instagram"
    class="instagram__container--whole common__margin-lr common__margin-tb">
    <div class="instagram__wrap-title common__item--title-style fade-in fade-in-up">
      <h2 class="instagram__text-title common__title-style">Instagram</h2>
    </div>
    <div class="instagram__container--primary fade-in fade-in-up">
      <a
        href="https://www.instagram.com/"
        class="instagram__link--primary"
        target="_blank">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/Instagram-icon.png"
          alt="インスタグラムのアイコン"
          class="instagram__thumb--primary"
          width="230"
          height="230"
          decoding="async" />
      </a>
      <div class="instagram__wrap--primary">
        <p class="instagram__text--id">@panya.2525</p>
        <p class="instagram__text--sentence">
          SNSが不慣れなパン職人が
          <br />こだわりの食材を使って作るパンを<br />
          ぜひ焼きたてで食べていただきたくて<br />
          毎日インスタストーリーにてパンの焼き上がり時間更新中です！
        </p>
      </div>
    </div>
  </section>
  <section
    id="access"
    class="access__container--whole common__margin-lr common__margin-tb">
    <div class="access__wrap-title common__item--title-style fade-in fade-in-up">
      <h2 class="access__text-title common__title-style">
        アクセス・お問い合わせ
      </h2>
    </div>
    <div class="access__container--primary fade-in fade-in-up">
      <iframe
        class="access__iframe--map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.573385563618!2d139.7110001105695!3d35.68750517247082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cea2f4009f9%3A0x36a1c52078eedab!2z44CSMTYwLTAwMjIg5p2x5Lqs6YO95paw5a6_5Yy65paw5a6_77yR5LiB55uu77yR4oiS77yRIOODr-OCs-ODvOW-oeiLkeODk-ODqw!5e0!3m2!1sja!2sjp!4v1722682507560!5m2!1sja!2sjp"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      <table class="access__table--primary">
        <address>
          <tr>
            <th>住所</th>
            <td>〇〇県〇〇市1234-56</td>
          </tr>
          <tr>
            <th>電話</th>
            <td><a href="tel:000-0000-0000">000-0000-0000</a></td>
          </tr>
          <tr>
            <th>営業時間</th>
            <td>00:00～00:00</p>
            </td>
          </tr>
          <tr>
            <th>定休日</th>
            <td>毎週〇曜日</td>
          </tr>
          <tr>
            <td> <a
                href="https://www.instagram.com/"
                class="access__link--primary"
                target="_blank">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/images/Instagram-icon.png"
                  alt="インスタグラムのアイコン"
                  class="access__thumb--primary"
                  width="80"
                  height="80"
                  decoding="async" />
              </a>
            </td>
            <td>お問い合わせはお電話か
              インスタのDMでお願いします。</td>
          </tr>
        </address>
      </table>
    </div>
  </section>
  <section
    id="recruit"
    class="recruit__container--whole common__margin-lr common__margin-tb">
    <div class="recruit__wrap-title common__item--title-style fade-in fade-in-up">
      <h2 class="recruit__text-title common__title-style">
        求人情報
      </h2>
    </div>
    <div class="recruit__container--primary ">
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/recruit.png"
        alt="求人情報の画像"
        class="recruit__thumb--primary fade-in fade-in-up"
        width="650"
        height="430"
        decoding="async" />
      <h3 class="recruit__text-subTitle fade-in fade-in-up">一緒に働いてくれる仲間を募集します</h2>
        <p class="recruit__text-primary fade-in fade-in-up">ここにテキストが入ります。 ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。 ここにテキストが入ります。 ここにテキストが入ります。
        </p>
        <table class="recruit__table--primary fade-in fade-in-up">
          <tr>
            <th>勤務時間</th>
            <td>00:00～00:00</td>
          </tr>
          <tr>
            <th>時給</th>
            <td>0000円</td>
          </tr>
          <tr>
            <th>業務内容</th>
            <td> ここにテキストが入ります。 ここにテキストが入ります。 ここにテキストが入ります。</td>
          </tr>
          <tr>
            <th>福利厚生</th>
            <td>ここにテキストが入ります。 ここにテキストが入ります。 ここにテキストが入ります。</td>
          </tr>
        </table>
        <p class="recruit__text-inquiry fade-in fade-in-up">詳しくはお気軽にお問い合わせください。</p>

    </div>
  </section>

  <section id="faq" class="faq common__margin-lr common__margin-tb">
    <div class="faq__titleWrap fade-in fade-in-up common__item--title-style">
      <h2 class="faq__titleText common__title-style">FAQ</h2>
    </div>
    <div class="faq__wrap">
      <?php
      // カスタム投稿タイプ 'faq' から全ての投稿を取得
      $args = [
        'post_type'      => 'qa',  // カスタム投稿タイプのスラッグ
        'posts_per_page' => -1,     // 全ての投稿を取得
        'orderby'        => 'date', // 日付順で取得
        'order'          => 'DESC', // 新しい投稿から順に
      ];

      $query = new WP_Query($args);

      if ($query->have_posts()) : ?>
        <ul class="faq__list" id="faqList">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php
            // 投稿のスラッグを取得
            $post_slug = get_post_field('post_name', get_the_ID());

            // カスタムフィールドの値を取得（配列形式で）
            $questions = get_post_meta(get_the_ID(), 'qa-question', false); // 質問（複数）
            $answers = get_post_meta(get_the_ID(), 'qa-answer', false);     // 回答（複数）

            // 質問と回答をペアで処理
            if (!empty($questions) && !empty($answers)) :
              $faq_count = min(count($questions), count($answers)); // 質問と回答の最小数に合わせる
              for ($i = 0; $i < $faq_count; $i++) :
                $question = $questions[$i];
                $answer = $answers[$i];
            ?>

                <li class="faq__item">
                  <button class="faq__tabTextQuestion acdn acdn_close">Q　<?php echo esc_html($question); ?></button>
                  <div class="faq__tabTextAnswer acdn_close">
                    <ul>
                      <li>A　<?php echo wp_kses_post($answer); ?></li>
                    </ul>
                  </div>
                </li>
              <?php endfor; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p>FAQが見つかりません。</p>
      <?php endif; ?>
    </div>
  </section>

  <!-- ローディングアニメーション -->
  <div class="loding__container--whole">
    <div class="loding__wrap--display-on loding__wrap--display-off">
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
        alt="ロゴ"
        class="loding__thumb--logo"
        width="120"
        height="120"
        decoding="async" />
      <div class="loding__row">
        <div class="loding__col-sm-2">
          <div class="loding__sp loding__sp-circle"></div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>