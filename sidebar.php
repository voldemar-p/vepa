<div id="search-trigger--js" class="searchform mobile-searchform">
    <a title="otsi"><img src="<?php echo get_theme_file_uri('/images/Ikoonid/15x15/search.svg'); ?>" alt="otsi"></a>
</div>
<div id="sidebar_primary" class="sidebar mobile-sidebar">
    <?php dynamic_sidebar('main_sidebar'); ?>
    <a class="button" id="button-sidebar" href="<?php echo esc_url(site_url('/osalemine/liitunud-koolid')); ?>">
    <?php _e('MEIE KOOLID','vepa'); ?></a>
</div>