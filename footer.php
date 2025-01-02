
<footer id="footer" class="footer__container--whole common__margin-lr">
        <div class="footer__container--flex">
            <h1 class="footer__wrap--logo">
              <a href="#" class="footer__link--logo">
                <img
                  src="<?php echo get_template_directory_uri();?>/images/logo.png"
                  alt="ロゴ"
                  class="footer__thumb--logo"
                  width="120"
                  height="120"
                  decoding="async"
                />
              </a>
            </h1>
            <div class="footer__wrap--right">
              <nav class="gnav">
                <ul class="gnav__wrap--list">
                  <li class="gnav__wrap--list-item">
                    <a href="#" class="gnav__link"> こだわり </a>
                  </li>
                  <li class="gnav__wrap--list-item">
                    <a href="#" class="gnav__link"> 商品（おすすめと定番） </a>
                  </li>
                  <li class="gnav__wrap--list-item">
                    <a href="#" class="gnav__link"> 求人情報 </a>
                  </li>
                  <li class="gnav__wrap--list-item">
                    <a href="#" class="gnav__link"> アクセス </a>
                  </li>
                  <li class="gnav__wrap--list-item">
                    <a href="#" class="gnav__link"> お問い合わせ </a>
                  </li>
                  <li class="gnav__wrap--list-item">
                    <a
                      href="https://www.instagram.com/"
                      class="gnav__link"
                      target="_blank"
                    >
                      <img
                        src="<?php echo get_template_directory_uri();?>/images/Instagram-icon.png"
                        alt="ロゴ"
                        class="footer__thumb--instagram"
                        width="60"
                        height="60"
                        decoding="async"
                      />
                    </a>
                  </li>
                </ul>
              </nav>

              
            </div>
          </div>
          <p class="footer__text--copyright">copyright 2022 Bakeryshop.2525</p>
    </footer>
    <script src="<?php echo get_template_directory_uri();?>/javascript/script.js"></script>
  

<!-- スムーススクロール -->
<script>
//servicesやabout用のjavascriptの記述
document.addEventListener("DOMContentLoaded", () => {
    const smoothScrollTrigger2 = document.querySelectorAll('a[href^="<?php echo home_url('/'); ?>#"]');
    const smoothScrollTrigger3 = '<?php echo home_url('/'); ?>';

    for (let i = 0; i < smoothScrollTrigger2.length; i++) {
        smoothScrollTrigger2[i].addEventListener("click", (e) => {
            e.preventDefault();

            let href = smoothScrollTrigger2[i].getAttribute("href");
            let targetElement;

            // トップページの場合
            if (document.body.classList.contains('home')) {
                targetElement = document.getElementById(href.replace(smoothScrollTrigger3 + "#", ""));
                if (targetElement) {
                    const rect = targetElement.getBoundingClientRect().top;
                    const offset = window.pageYOffset;
                    const gap = 60;
                    const target = rect + offset - gap;

                    console.log(targetElement);

                    
                    window.scrollTo({
                        top: target,
                        behavior: "smooth",
                    });
                } else {
                    console.log("Target element not found");
                }
            } else {
                // 下層ページの場合、URLにターゲットIDを追加してトップページへリダイレクト
                const targetID = href.replace(smoothScrollTrigger3 + "#", "");
                window.location.href = `${smoothScrollTrigger3}?scrollTo=${targetID}`;
            }
        });
    }

    // トップページでURLのパラメータを解析してスクロール
    const urlParams = new URLSearchParams(window.location.search);
    const scrollTo = urlParams.get('scrollTo');
    if (scrollTo) {
        const targetElement = document.getElementById(scrollTo);
        if (targetElement) {
            const rect = targetElement.getBoundingClientRect().top;
            const offset = window.pageYOffset;
            const gap = 60;
            const target = rect + offset - gap;

            window.scrollTo({
                top: target,
                behavior: "smooth",
            });
        } else {
            console.log("Target element not found");
        }
    }
});

</script>
  
  
    <?php wp_footer(); ?>
</body>
</html>
