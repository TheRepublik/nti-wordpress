<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <input type="text" class="find-search-text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" class="pull-right btn btn-find" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
        <div class="clearfix"></div>
    </div>
</form>
