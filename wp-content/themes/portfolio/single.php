<?php get_header(); ?>
<div class="port_title">
    <h1><?php the_title(); ?></h1>
    <div><?php the_post_thumbnail(); ?></div>
</div>
<div class="bg">
    <section class="maindata">
        <?php the_content(); ?>
        <div class="return_menu">
            <a href="<?php echo esc_url(home_url()) ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/gosite_button.png')) ?>" alt="GOSITE" /></a>
            <a href="<?php echo esc_url(home_url('/category/works')) ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/return_button.png')) ?>" alt="戻る" /></a>
        </div>
    </section>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
    .bg {
        margin: 0 auto;
        filter: brightness(100%);
    }

    .titleimg {
        filter: brightness(100%);
    }
</style>
<?php get_footer(); ?>