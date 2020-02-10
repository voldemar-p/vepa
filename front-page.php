<?php get_header();

while(have_posts()) {
     the_post();
?>
     <div class="narrow-width content-text">
          <?php the_content(); ?>
     </div>
     <?php
          $home_sihtruhmad = new WP_Query(array(
               'post_type' => 'page',
               'post_parent' => 42,
               'order' => 'ASC',
          ));
     ?>

     <div class="kodulehe-sihtruhmade-div narrow-width" style="background-image: url(<?php echo get_theme_file_uri('/images/muud_elemendid/pattern.svg'); ?>);">
          <div class="sihtruhmade-alam-div">
               <?php while($home_sihtruhmad-> have_posts()) {
                    $home_sihtruhmad->the_post(); ?>
                    <div class="kodulehe-sihtruhmade-scroll">
                         <div>
                              <h3><?php the_title(); ?></h3>
                              <?php echo wp_trim_words(get_the_content(), 18); ?>
                         </div>
                         <div class="loe-edasi">
                              <a class="button" href="<?php echo get_permalink(); ?>">LOE EDASI</a>
                         </div>
                    </div>
               <?php } ?>
          </div>
     </div>
     <div class="esilehe-video w-100" style="background-image:url(<?php echo get_theme_file_uri('/images/video_img.png'); ?>);">
          <p class="white-uppercase video-text">vaata, mida räägivad vepa-st asjaosalised</p>
          <img src="<?php echo get_theme_file_uri('/images/Ikoonid/60x60/play.svg'); ?>" alt="">
     </div>
     <div id="video-iframe">
          <img id="video-close" src="<?php echo get_theme_file_uri('/images/Ikoonid/40x40/close.svg'); ?>" alt="sulge">
          <iframe src="https://www.youtube.com/embed/j4ZX_c0uINU?autoplay=1" frameborder="0"></iframe>
     </div>
     <div class="liitunud narrow-width">
          <div class="liitunud-kes" style="background-image:url(<?php echo get_theme_file_uri('/images/muud_elemendid/mask.png'); ?>);">
               <p class="liitunud-nr">241</p>
               <p class="liitunud-txt">LIITUNUD</p>
               <p class="liitunud-txt">KOOLI</p>
          </div>
          <div class="liitunud-kes" style="background-image:url(<?php echo get_theme_file_uri('/images/muud_elemendid/mask.png'); ?>);">
               <p class="liitunud-nr">782</p>
               <p class="liitunud-txt">LIITUNUD</p>
               <p class="liitunud-txt">ÕPETAJAT</p>
          </div>
          <div class="liitunud-kes" style="background-image:url(<?php echo get_theme_file_uri('/images/muud_elemendid/mask.png'); ?>);">
               <p class="liitunud-nr">3462</p>
               <p class="liitunud-txt">LIITUNUD</p>
               <p class="liitunud-txt">LAST</p>
          </div>
     </div>

     <div class="kodulehe-postituste-div row">
          <?php get_template_part('/TemplateParts/postituste-list'); ?>
     </div>
     
<?php     
}

 get_footer(); ?>
