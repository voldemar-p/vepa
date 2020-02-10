
<?php
    $post_list = new WP_Query (array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_date' => 'DESC',
    ));

    while($post_list->have_posts()) {
        $post_list->the_post();
    ?>

    <div class="col-3 kodulehe-postituste-bg" style="background-image: url(<?php echo get_theme_file_uri('/images/muud_elemendid/pattern.svg'); ?>);">
        <div class="kodulehe-postituste-scroll">
            <div class="kodulehe-postituste-scroll-alam">
                <div class="scroll-content">
                    <h5><?php the_title(); ?></h5>
                    <p class="grey-subtitle"><?php echo get_the_title(get_option('page_for_posts', true)); ?></p>
                    <?php echo wp_trim_words(get_the_content(), 18); ?>
                </div>
                <div class="loe-edasi">
                    <a class="button" href="<?php echo get_permalink(); ?>">LOE EDASI</a>
                </div>
            </div>
        </div>
    </div>

<?php } ?>