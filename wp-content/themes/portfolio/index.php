<?php get_header(); ?>
<section class="main flex">
    <img src="<?php echo esc_url(get_theme_file_uri('img/NishioRyoma.png')) ?>" alt="NishioRyoma">
</section>
<section class="about flex wrapper">
    <div class="titleimg titleabout"></div>
    <div class="bg aboutbg">
        <div class="about_text">
            <div class="about_text_my">

                <div class="ab-content">
                    <p>I AM RYOMA</p>
                    <p>TAKAYAMA CITY</p>
                    <div class="bgsmile"><img src="<?php echo esc_url(get_theme_file_uri('img/smile1.png')) ?>" alt="smile"></div>
                </div>

                <div class="ab-content">
                    <p>WEB DESIGN</p>
                    <p>FRONTEND</p>
                    <div class="bgsmile"><img src="<?php echo esc_url(get_theme_file_uri('img/smile1.png')) ?>" alt="smile"></div>
                </div>

                <div class="ab-content">
                    <p>What’s wrong with</p>
                    <p>enjoying the moment?</p>
                    <div class="bgsmile"><img src="<?php echo esc_url(get_theme_file_uri('img/smile1.png')) ?>" alt="smile"></div>
                </div>
            </div>
            <div class="dump"><img src="<?php echo esc_url(get_theme_file_uri('img/ABC.png')) ?>" alt="ABC"></div>
        </div>

        <a href="<?php echo esc_url(home_url('/about')) ?>"><img class="viewmore" src="<?php echo esc_url(get_theme_file_uri('img/viewmore_button.png')) ?>" alt="viewmore"></a>
    </div>
</section>
<section class="works flex wrapper">
    <div class="titleimg titleworks"></div>
    <div class="bg worksbg">
        <div class="all_portfolio">
            <div class="instagram port_block">
                <div class="in_img"><img src="<?php echo esc_url(get_theme_file_uri('img/p_henadrick.jpeg')) ?>" alt="henadrick"><img src="<?php echo esc_url(get_theme_file_uri('img/p_monburan.jpg')) ?>" alt="monburan"><img src="<?php echo esc_url(get_theme_file_uri('img/p_ryoma.jpg')) ?>" alt="ryoma"></div>
                <div class="in_img"><img src="<?php echo esc_url(get_theme_file_uri('img/works_dejavu.jpg')) ?>" alt="dejavu"><img src="<?php echo esc_url(get_theme_file_uri('img/p_season.jpg')) ?>" alt="season"><img src="<?php echo esc_url(get_theme_file_uri('img/p_aespa.jpg')) ?>" alt="aespa"></div>
                <img class="arrow ar" src="<?php echo esc_url(get_theme_file_uri('img/arrowP.png')) ?>" alt="arrow">
                <a href="https://www.instagram.com/rr_ym4/" target="_blank"><img class="link_button" src="<?php echo esc_url(get_theme_file_uri('img/instagram_button.png')) ?>" alt="instagram"></a>
            </div>
            <div class="portfolio port_block">
                <div class="in_img"><img src="<?php echo esc_url(get_theme_file_uri('img/p_portfolio.jpg')) ?>" alt="portfolio"><img src="<?php echo esc_url(get_theme_file_uri('img/p_dejavu.jpg')) ?>" alt="dejavu"><img src="<?php echo esc_url(get_theme_file_uri('img/p_thanks.jpg')) ?>" alt="thanks"></div>
                <div class="in_img"><img src="<?php echo esc_url(get_theme_file_uri('img/p_majan.jpg')) ?>" alt="majan"><img src="<?php echo esc_url(get_theme_file_uri('img/p_yubika.jpg')) ?>" alt="yubika"><img src="<?php echo esc_url(get_theme_file_uri('img/coming soon.jpg')) ?>" alt="coming soon"></div>
                <img class="arrow2 ar" src="<?php echo esc_url(get_theme_file_uri('img/arrowO.png')) ?>" alt="arrow">
                <a href="<?php echo esc_url(home_url('/category/works')) ?>"><img class="link_button" src="<?php echo esc_url(get_theme_file_uri('img/portfolio_button.png')) ?>" alt="portfolio"></a>
            </div>
        </div>
    </div>

</section>
<section class="contact flex" id="contact">
    <div class="titleimg titlecontact"></div>
    <div class="bg contactbg">
        <div class="contact_contents">
            <div class="contact_sns">
                <div class="sns instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                    <p>INSTAGRAM</p>
                </div>
                <div class="sns twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                    <p>TWITTER</p>
                </div>
                <div class="sns mail">
                    <ion-icon name="mail-open-outline"></ion-icon>
                    <p>MAIL</p>
                </div>
            </div>
            <p class="OR">OR</p>
            <div class="contact_button"><a href="<?php echo esc_url(home_url('/contact')) ?>"></a><img src="<?php echo esc_url(get_theme_file_uri('img/contact_button.png')) ?>" alt="contact"></div>
        </div>
    </div>
</section>
</div>
</div>
</div>
<style>
    .aboutbg {
        z-index: 999;
    }
</style>
<?php get_footer(); ?>