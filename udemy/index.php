<?php get_header() ?>



<div class="container text-center" id="sidebar">
    <div class="row">
        <div class="col-sm-8 col-xs-12">
            <p>Two column segment, sidebar in the second column.</p>
        </div>
        <div class="col-sm-4 col-xs-12">

            <?php get_sidebar() ?>

        </div>
    </div>
</div>




  <div class="container text-center" id="about">

    <div class="row">
      <div class="col-lg-12">
        <img class="about-img img-responsive" src="images/siabottle360x200.jpg" alt="sialogo">
      </div>
      <h3>Records</h3>
      <br />
    <p><em>Down... Down... Under The Underground...</em></p>

    <div id="padabout"> </div>
    <div class="row">
      <div class="col-md-12">
        <img class="about-img-long img-responsive img-thumbnail" src="images/haroscar-small.jpg" alt="sialogo">

      </div>
    </div>

    </div>
      </div>




      <div id="partists"> </div>
      <div id="apartists" class="container text-center"><h4>Swallow It All Records<br />artists roster includes...</h4> </div>
      <div id="artists" class="carousel slide" data-ride="carousel" data-interval="2500">
       <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#artists" data-slide-to="0" class="active"></li>
         <li data-target="#artists" data-slide-to="1"></li>
         <li data-target="#artists" data-slide-to="2"></li>
         <li data-target="#artists" data-slide-to="3"></li>
         <li data-target="#artists" data-slide-to="4"></li>
         <li data-target="#artists" data-slide-to="5"></li>
       </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
         <div class="item active">
           <img src="./images/carvoodoohealers.jpg" alt="voodoo healers">
           <div class="carousel-caption">
             <h3>Voodoo Healers</h3>
             <p></p>
           </div>
         </div>

         <div class="item">
           <img src="./images/carcavemanjoe.jpg" alt="caveman joe">
           <div class="carousel-caption">
             <h3>Caveman Joe</h3>
             <p></p>
           </div>
         </div>

         <div class="item">
           <img src="./images/cargreengoblins.jpg" alt="green goblins">
           <div class="carousel-caption">
             <h3>Green Goblins</h3>
             <p></p>
           </div>
         </div>

         <div class="item">
           <img src="./images/carloupgarou.jpg" alt="loup garou">
           <div class="carousel-caption">
             <h3>Loup Garou</h3>
             <p></p>
           </div>
         </div>

         <div class="item">
           <img src="./images/carpersonalitycrisis.jpg" alt="personality crisis">
           <div class="carousel-caption">
             <h3>Personality Crisis</h3>
             <p></p>
           </div>
         </div>

         <div class="item">
           <img src="./images/carthehydes.jpg" alt="hydes">
           <div class="carousel-caption">
             <h3>The Hydes</h3>
             <p></p>
           </div>
         </div>

       </div>

       <!-- Left and right controls -->
       <a class="left carousel-control" href="#artists" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#artists" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>

     </div>



   <div class="container text-center">
     <div class="row">
     <div class="col-md-12">
       <img class="img-responsive img-thumbnail" src="images/sia-top-pic-small.jpg" alt="sialogo">
     </div>
   </div> </div>




<div id="preleases">.</div>
<div class="container" id="releases">
 <h3 class="text-center">Releases</h3>

     <a href="http://www.discogs.com/label/177326-Swallow-It-All-Records?sort=year&amp;sort_order=desc" target="_blank">
      <img  class="img-responsive" src="./images/releases.jpg" alt="releases"  /></a>
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
