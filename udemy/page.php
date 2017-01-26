<?php get_header() ?>


<div class="container text-center" id="sidebar">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
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

        <div class="col-sm-4 col-xs-12">

            <?php get_sidebar() ?>

        </div>
    </div>
</div>



<?php get_footer() ?>
