<div class="search-close--js">
    <img src="<?php echo get_theme_file_uri('/images/Ikoonid/40x40/close.svg'); ?>" alt="sulge">
</div>
<form role="search" class="search-form" method="get" action="<?php echo esc_url(get_home_url('/')); ?>" autocomplete="off">
    <label id="otsi-label" for="search">Otsi</label>
    <input type="search" name="s" class="s" id="s" placeholder="Märksõna" value="<?php echo get_search_query() ?>">
    <button id="search-submit-btn" type="submit" value="search">
        <img src="<?php echo get_theme_file_uri('/images/Ikoonid/40x40/right.svg'); ?>" alt="otsi">
    </button>
</form>
