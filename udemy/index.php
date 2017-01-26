<?php get_header() ?>


<div class="container text-center" id="sidebar">
    <div class="row">
        <p>Two column segment, sidebar in the second column.</p>

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




  <div class="container text-center" id="about">

    <div class="row">
      <div class="col-lg-12">
        <img class="about-img img-responsive" src="<?php bloginfo('template_url'); ?>/assets/images/siabottle360x200.jpg" alt="sialogo">
      </div>
      <h3>Records</h3>
      <br />
    <p><em>Down... Down... Under The Underground...</em></p>

    <div id="padabout"> </div>


    </div>
  </div>






 <div class="container" id="contact">
   <h3 class="text-center">Contact</h3>
   <br />
   <div class=" col-md-3"></div>
   <div class="well well-lg col-md-6 text-center">
     <p class="text-center contactsia"><strong>Swallow It All Records</strong></p>
     <p class="text-center"><em>	Record Label / Publishing / Artist Management </em></p>
     <br />
     <p><span class="glyphicon glyphicon-map-marker"></span>Katerini, 60100 Pieria, GR</p>
     <!-- <p><span class="glyphicon glyphicon-earphone"></span> +30   </p>
     <p><span class="glyphicon glyphicon-phone"></span> +30  </p> -->
     <p><span class="glyphicon glyphicon-envelope"></span> swallowitallrecords@gmail.com</p>
     <br />
     <span class="text-center"><a class="social" href="https://www.facebook.com/groups/130558663625207/" target="_blank">
       <i class="socialimage fa fa-facebook-square fa-3x" ></i></a></span>
       <span class="text-center"><a class="social" href="https://twitter.com/SIArecordsGR" target="_blank">
         <i class="socialimage fa fa-twitter-square fa-3x" ></i></a></span>

       </div>
     </div>





    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: 40.270877, lng: 22.50666};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: myLatLng,
          mapTypeId: google.maps.MapTypeId.SATELLITE
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0kq1jxmnS6FktwcUKXcZOQaAkzXK__zk&callback=initMap">
    </script>





<?php get_footer() ?>
