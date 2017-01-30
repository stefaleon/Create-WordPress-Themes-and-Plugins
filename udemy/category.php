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
                            <small>
                                Posted on: <?php the_time('F j, Y'); ?>
                                at <?php the_time('g:i a'); ?>,
                                <br />
                                in <?php the_category( ' ' ); ?>
                                <br />
                                <?php the_tags(); ?>
                            </small>
                            <?php  the_post_thumbnail('thumbnail', array(
                                'class' => 'img-responsive'
                                ));
                            ?>
                            <?php the_content(); ?>
                            <hr />

                    <?php endwhile; ?>

                    <div class="nav-previous alignleft"><?php next_posts_link( 'Older Posts' ); ?></div>
                    <div class="nav-next alignright"><?php previous_posts_link( 'Newer Posts' ); ?></div>

                <?php endif; ?>


        </div>

        <div class="col-sm-4 col-xs-12">

            <?php get_sidebar() ?>

        </div>
    </div>
</div>


<?php get_footer() ?>
