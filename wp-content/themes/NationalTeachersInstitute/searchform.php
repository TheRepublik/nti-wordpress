<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <input type="text" placeholder="Search" class="sidebar-search-text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <div class="clearfix"></div>
    </div>
</form>
