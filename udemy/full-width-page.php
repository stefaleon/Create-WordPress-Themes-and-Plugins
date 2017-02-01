<?php
// Template Name: Full Width Page
get_header() ?>



<div class="container text-center">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
                <?php
                if(have_posts()):
                        while(have_posts()): the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                                <?php the_title( '<h1>', '</h1>' ); ?>
                            </a>
                            <?php the_content(); ?>
                            <hr />
                            <?php comments_template() ?>

                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</div>



<?php get_footer() ?>
