<?php get_header(); ?>
<main>
    <section class="contact__heading"> 
        <div class= "contact__heading__wrap">
            <div class="contact__heading__title">
                <h1>Contact</h1>
                <h4>お問合せ</h4>
            </div>
        </div>
    </section>
    <section class="contact__form">
            <div class="contact__form__wrap">
                <div class="contact__form-title">
                    <h2>お問合せ</h2>
                    <h4>お仕事のご相談・ご質問などございましたら、以下のフォームからお気軽にご連絡ください。</h4>
                </div>
                <div class="contact__form__content">
                <?php echo do_shortcode('[contact-form-7 id="11" title="お問い合わせ"]'); ?>
                </div>
            </div>
    </section>
</main>
<?php get_footer(); ?>