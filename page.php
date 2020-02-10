<?php get_header(); ?>

<?php 
    $children = get_pages(array(
        'child_of' => get_the_ID(),
    ));

    while(have_posts()) {
        if (!is_front_page() && get_post_type() == 'page' && count($children) > 0) {
            the_post();

            $posts_parent = new WP_Query(array(
                'post_type' => 'page',
                'post_parent' => get_the_ID(),
                'order' => 'ASC',
            ));
        ?>

            <div class="narrow-width">
                <h2><?php the_title(); ?></h2>
                <?php
                while($posts_parent->have_posts()) {
                    $posts_parent->the_post(); ?>
                    <div class="main-page-scroll" style="background-image: url(<?php echo get_theme_file_uri('/images/muud_elemendid/pattern.svg'); ?>);">
                        <div class="main-page-scroll-alam">
                            <h3><?php the_title(); ?></h3>
                            <div class="main-page-scroll-content">
                                <?php echo wp_trim_words(get_the_content(), 28); ?>
                            </div>
                            <div class="loe-edasi">
                                <a class="button" href="<?php echo get_the_permalink(); ?>">LOE EDASI</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        <?php
        } else {
            the_post(); ?>
            <div class="narrow-width content-text">
                <h2><?php the_title(); ?></h2>
                <div class="parent-menu-links">
                    <?php streamlineBreadcrumbs($post, true); ?>
                 </div>
                <?php the_content(); ?>
            </div>
        <?php }
    }

 get_footer(); ?>