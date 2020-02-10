
<?php get_header();

if(have_posts()) { ?>
    <div class="narrow-width">
        <h2>Tulemused: "<?php the_search_query(); ?>"</h2>

        <?php
        while(have_posts()) {
            the_post();
        ?>
            
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
        <div class="post-links">
            <?php echo paginate_links(array(
                'prev_text' => '<',
                'next_text' => '>'
            )); ?>
        </div>
    </div>
    
<?php
} else { 
?>
    <div class="narrow-width">
        <h2>Märksõnale "<?php the_search_query(); ?>" vasteid ei leitud</h2>
    </div>
<?php }

get_footer(); ?>
