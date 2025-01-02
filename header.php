
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/CSS/ress.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/CSS/style.css" />
    <title>bread</title>
    <?php wp_head(); ?> 
  </head>
  <body <?php body_class(); ?>>
    <header id="header" class="header__container--fixed">
      <div class="header__container--flex common__margin-lr">
        <h1 class="header__wrap--logo">
          <a href="#" class="header__link--logo">
            <img
              src="<?php echo get_template_directory_uri();?>/images/logo.png"
              alt="ロゴ"
              class="header__thumb--logo"
              width="120"
              height="120"
              decoding="async"
            />
          </a>
        </h1>
        <div class="header__wrap--right">
          <nav class="gnav">
            <ul class="gnav__wrap--list">
              <li class="gnav__wrap--list-item">
                <a href="<?php echo home_url('/'); ?>#commit" class="gnav__link">
                こだわり
                </a>
              </li>
              <li class="gnav__wrap--list-item">
                <a href="<?php echo home_url('/'); ?>#best" class="gnav__link">
                  商品（おすすめと定番）
                </a>
              </li>
              <li class="gnav__wrap--list-item">
                <a href="<?php echo home_url('/'); ?>#access" class="gnav__link">
                アクセス・お問い合わせ
                </a>
              </li>
              <li class="gnav__wrap--list-item">
                <a href="<?php echo home_url('/'); ?>#recruit" class="gnav__link">
                求人情報
                </a>
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
                    class="header__thumb--instagram"
                    width="60"
                    height="60"
                    decoding="async"
                  />
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <nav id="hamburger-navigation">
          <ul class="hamburger__sections-main">
            <li class="border1 border-width1">
              <a href="<?php echo home_url('/'); ?>#commit" class="humberger-menu-section">
                こだわり
              </a>
            </li>
            <li class="border1 border-width1">
              <a href="<?php echo home_url('/'); ?>#best" class="humberger-menu-section">
                商品（おすすめと定番）
              </a>
            </li>
            <li class="border1 border-width2">
              <a href="<?php echo home_url('/'); ?>#access" class="humberger-menu-section">
              アクセス・お問い合わせ
              </a>
            </li>
            <li class="border1 border-width2">
              <a href="<?php echo home_url('/'); ?>#recruit" class="humberger-menu-section">
                求人情報
              </a>
            </li>
            <li class="border1 border-width2">
              <a
                href="https://www.instagram.com/"
                class="humberger-menu-section"
                target="_blank"
              >
                <img
                  src="<?php echo get_template_directory_uri();?>/images/Instagram-icon.png"
                  alt="ロゴ"
                  class="humberger-menu-section-thumb"
                  width="60"
                  height="60"
                  decoding="async"
                />
              </a>
            </li>
          </ul>
        </nav>

        <div class="hamburger-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>