<?php get_header(); ?>

<div class="narrow-width">
    <h2><?php echo get_the_title(get_option('page_for_posts', true)); ?></h2>
    <h4>Artiklid</h4>
    <?php
        $uudised = new WP_Query(array(
            'post_type' => 'post',
            'order' => 'DESC',
            'paged' => $paged,
        ));

        if($uudised->have_posts()) {
            while($uudised->have_posts()) {
                $uudised->the_post(); ?>
                    <div class="main-page-scroll" style="background-image: url(<?php echo get_theme_file_uri('/images/muud_elemendid/pattern.svg'); ?>);">
                        <div class="main-page-scroll-alam">
                            <h5><?php the_title(); ?></h5>
                            <p class="post-date"><?php echo get_the_date('d/m/Y'); ?></p>
                            <div class="main-page-scroll-content">
                                <?php echo wp_trim_words(get_the_content(), 28); ?>
                            </div>
                            <div class="loe-edasi">
                                <a class="button" href="<?php echo get_the_permalink(); ?>">LOE EDASI</a>
                            </div>
                        </div>
                    </div>
            <?php } ?>
            <div class="post-links">
                <?php echo paginate_links(array(
                    'prev_text' => '<',
                    'next_text' => '>'
                )); ?>
            </div>
            <h4>Uudiskirjad</h6>
    <?php } ?> 
</div>

<?php get_footer(); ?>
