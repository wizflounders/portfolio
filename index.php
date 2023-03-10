<?php get_header(); ?>
<main>
    <section class="top__main-visual">
        <div class="top__main-visual__wrap">
            <div class="top__main-visual__content">
                <div class="top__main-visual__content__name">
                    <h1>Mika Terada</h1>
                    <h3>model & Web programmer</h3>
                </div>
                <p>丁寧なコミュニケーションと<br>
                    10年以上の広告モデルの経験を活かし<br>
                    お客さまの思いを形にするWebサイトづくりをお手伝いいたします。
                </p>
            </div>
            <div class="top__main-visual__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-img.png" alt="programming image -- pink desktop">
            </div>
        </div>
    </section>
    <section class="top__about">
        <div class="top__about__wrap">
                <h2 class="top__about__title-sp">About</h2>
                <h4 class="top__about__subtitle-sp">私について</h4>
            <div class="top__about__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-img.png" alt="my portrait">
            </div>
            <div class="top__about__content">
                <h2 class="top__about__content__title-pc">About</h2>
                <h4 class="top__about__content__subtitle-pc">私について</h4>
                <div class="top__about__content__introduction">
                    <p>現在はモデル業と共にWebプログラマーとして活動をしております。</p>
                    <p class="top__about__content__introduction-bottom">
                        現在はモデル業と共にWebプログラマーとして活動をしております。 <br>
                        モデル業の現場で身につけたセンスと経験を活かしながら、<br>
                        常にお客さまとユーザー目線に立った視点からきめ細かな開発を心がけております。
                    </p>  
                </div>
                <a class="top__about__content__view-more-btn" href="/about/">
                    view more
                    <p class="arrow"></p>
                </a>
            </div>
        </div>
    </section>
    <section class="top__contact">
        <div class="top__contact__wrap">
            <h2>Contact</h2>
            <h4>お問い合わせ</h4>
            <p>お仕事のご相談やご依頼など、お気軽にご連絡ください</p>
            <div class="top__contact-btn">
                <a href="/contact/">お問い合わせはこちら</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
