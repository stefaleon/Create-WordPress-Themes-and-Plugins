

<form role="search" method="get" id="search-form" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class='input-group'>
	    <input type="text" id="search" class="input-sm form-control" placeholder="Search" value="<?php the_search_query(); ?>" name="s" />
        <button type="submit" class="btn btn-primary btn-block">Search</button>
    </div>
</form>
