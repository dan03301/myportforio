<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> DanTakashimaのポートフォリオサイト</title>
  <script src="https://kit.fontawesome.com/f65a049675.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrap">
    <nav class="navbar navbar-expand-lg navbar-light nav">
      <div class="nav_content">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="main_logo" href="#">D</a></li>
        </ul>
      </div>
      <div class="nav_content">
        <div class="menu-trigger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <ul id="nav_ul">
          <li><a href="#about_section">About</a></li>
          <li><a href="#portfolio_section">Portfolio</a></li>
          <li><a href="#services_section">Services</a></li>
          <li><a href="#contact_section">Contact</a></li>
        </ul>
      </div>
    </nav>
    <header id="header"></header>
    <section id="about_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="h2_title">About</h2>
          </div>
        </div>
        <div class="about_content">
          <?php
          $page_data = get_page_by_path('top_info');
          $page_id = $page_data->ID;
          ?>
          <div class="img_wrap">
            <img src="<?php the_field('face_img', $page_id); ?>" class="about_img">
          </div>
          <div class="text_wrap">
            <h3 class="h3_title text-center">Profile</h3>
            <div class="text_content">
              <?php
              the_field('profile', $page_id);
              ?>
            </div>
            <h3 class="h3_title text-center">Skill</h3>
            <div class="text_content">
              <ul class="skill_content">
                <li class="skill_list">
                  <i class="fab fa-html5 skill_font"></i>
                  <p>HTML</p>
                </li>
                <li class="skill_list">
                  <i class="fab fa-css3-alt skill_font"></i>
                  <p>CSS</p>
                </li>
                <?php
                if (have_rows('skill', $page_id)) :
                  while (have_rows('skill', $page_id)) : the_row();
                ?>
                    <li class="skill_list">
                      <img src="<?php the_sub_field('skill_icon'); ?>" class="skill_icon">
                      <p c><?php the_sub_field('skill_name'); ?></p>
                    </li>
                <?php
                  endwhile;
                endif;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- about_section -->
    <section id="portfolio_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="h2_title">Portfolio</h2>
          </div>
        </div>
        <div class="portfolio_content">
        <?php
                if (have_rows('portfolio', $page_id)) :
                  while (have_rows('portfolio', $page_id)) : the_row();
                ?>
          <a href="<?php the_sub_field('portfolio_url'); ?>" class="portfolio_box">
            <img src="<?php the_sub_field('portfolio_img'); ?>" class="porfolio_img">
            <p class="portfolio_img_p"><?php the_sub_field('portfolio_name'); ?></p>
          </a>
          <?php
                  endwhile;
                endif;
                ?>
          <a href="https://drive.google.com/drive/folders/1kzRMao64GyhtcL8IaMkpLotwEf7aUGd4?usp=sharing" class="portfolio_text_box">
            Read More<i class="fas fa-angle-double-right"></i>
          </a>
        </div>
      </div>
    </section>
    <section id="services_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="h2_title">Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <h3>Webサイト制作</h3>
            <i class="fas fa-laptop-code service_icon"></i>
            <p class="service_text">コーポレートサイト制作 / LP制作 / コーディング代行 / WordPressなどのシステム導入などのWebサイト制作全般をお受けします。作りたいサイトを丁寧にヒアリングし、お客様が求めるWebサイトを制作を通して、お手伝いをさせていただきます。</p>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <h3>スマホサイズ対応</h3>
            <i class="fas fa-mobile service_icon"></i>
            <p class="service_text">80%以上がスマートフォンでWebサイトを閲覧されている現在、スマホ対応していないWebサイトは多くの閲覧の機会を逃してしまいます。どの端末から見ても読みやすいWebサイトを実現し、ユーザビリティを向上させます。</p>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <h3>SEO対策</h3>
            <i class="far fa-file-code service_icon"></i>
            <p class="service_text">SEO（検索エンジン最適化）対策を行い、検索エンジンで上位に表示させるためのサポートをさせていただきます。W3C標準に準拠し、文書構造に沿った適切なマークアップを行わせていただきます。</p>
          </div>
        </div>
      </div><!-- container -->
    </section><!-- service -->
    <section id="contact_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="h2_title">Contact</h2>
            <h4 class="h4_title">お問い合わせはお気軽にどうぞ</h4>
            <?php echo do_shortcode('[contact-form-7 id="45" title="コンタクトフォーム 1"]')?>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p class="footer_p">© Dan Takashima 2020</p>
      <div class="footer_i">
        <a href="https://twitter.com/dan03301" class="footer_icon"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/dan03301" class="footer_icon"><i class="fab fa-github"></i></a>
      </div>
    </footer>

    <div id="page-top">
      <span class="page-top-icon">↑</span>
    </div>


  </div><!-- wrap -->
  <?php wp_footer(); ?>
</body>

</html>
