<?php get_header(); ?>
<div class="titleimg worksimg"></div>
<div class="bg">
  <div class="worksflex">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="worksmob">
          <a href="<?php the_permalink() ?>">
            <div class="mobimg">
              <?php
              if (has_post_thumbnail()) {
                $img_url = wp_get_attachment_url(get_post_thumbnail_id());
              }; ?>
              <img src="<?php echo $img_url ?>" alt="<?php echo the_title() ?>" />
            </div>
            <div class="traiangle"></div>
            <h1><?php the_title() ?><br /><span class="works-tag"><?php the_tags(''); ?></span></h1>
            <div class="worksinfo">
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>
          </a>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>
<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style>
  .bg {
    padding-bottom: 10%;
  }

  .titleimg {
    filter: brightness(100%);
  }

  .hide {
    display: block;
  }
</style>
<?php get_footer(); ?>