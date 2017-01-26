<?php get_header() ?>


<div class="container text-center" id="sidebar">
    <div class="row">

        <div class="col-xs-12 col-sm-8">
                <?php
                if(have_posts()):
                        while(have_posts()): the_post(); ?>


                            <a href="<?php the_permalink(); ?>">
                                <?php the_title( '<h3>', '</h3>' ); ?>
                            </a>
                            <small>
                                Posted on: <?php the_time('F j, Y'); ?>
                                at <?php the_time('g:i a'); ?>,
                                <br />
                                in <?php the_category( ' ' ); ?>
                                <br />
                                <?php the_tags(); ?>
                            </small>
                            <?php  the_post_thumbnail('full', array(
                                'class' => 'img-responsive'
                                ));
                            ?>
                            <h4>
                                 <?php edit_post_link(); ?>
                            </h4>
                            <?php the_content(); ?>

                            <hr />

                            <div class="nav-previous alignleft"><?php next_post_link( '%link','Next Post: %title ' ); ?></div>
                            <div class="nav-next alignright"><?php previous_post_link( '%link','Previous Post: %title' ); ?></div>

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
