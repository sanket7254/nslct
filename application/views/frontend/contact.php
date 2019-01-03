<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<?php if ($this->session->flashdata('success')): ?>
        <script>
            swal({
                title: "Done",
                text: "<?php echo $this->session->flashdata('success'); ?>",
                icon: "success",
                showConfirmButton: false,
                type: 'success'
            });
        </script>
<?php endif; ?>
<section id="page-header" class="section background">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Contact Us</h3>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section makepaddingno">
    <div class="container">

        <div class="contact_list row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <i class="fa fa-building-o fa-2x" align="center"></i>
                <h6>NSL Construction Technology, Inc.</h6>
                <ul>
                    <li><i class="fa fa-map-marker"></i> B-12, KM Park, Near Kohali Gas Agency, Dehu Road,Pune- 412 101</li>
                    <li><i class="fa fa-envelope-square"></i> support@nslct.in</li>
                    <li><i class="fa fa-phone"></i> +91 81496 73601</li>
                </ul>
            </div>
        </div><!-- end contactlist -->

        <div id="contact_form">
            <div class="row">
                <div class="col-md-4">
                    <div class="big-title">
                        <h2><span><i class="fa fa-comments-o"></i></span> Drop us A line Here</h2>
                        <p>If you are really interested to use services provided by NSL Construction Technology then please contact us through telephonic or email conversation. For any queries and questions kindly please feel free to contact us at anytime. We are always ready to help you. </p>
                    </div><!-- end big-title -->
                </div>
        
                <div class="contact_form col-md-8">
                    <div id="message"></div>
                    <form id="commentform" class="row" name="contactform" method="post"  action="HomeController/contact_info">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required> 
                            <input type="text" name="email" id="email1" class="form-control" placeholder="Email" required> 
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <textarea class="form-control" name="comments" id="comments" rows="8" placeholder="Message Below"></textarea>
                            <div class="pull-right">
                                <button type="submit" value="SEND" id="submit" class="btn btn-dark">SUBMIT</button>
                            </div>
                        </div>
                    </form> 
                </div> <!-- end contact_widget -->
            </div><!-- end row -->
        </div><!-- end #contact_form -->
    </div><!-- end container -->
</section><!-- end section -->

<article id="contact" class="map-section makenopaddingtop">
    <div id="map" class="wow slideInUp"></div>

    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCjcPm1XpPHY0_HJMfDf0NCak6vCZ4NQL4"></script>
</article><!-- end section -->

<script type="text/javascript">
    (function($) {
    "use strict";
    /* ==============================================
    MAP -->
    =============================================== */
        var locations = [ 18.678794, 73.724998, 2];
        
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 13,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: true,
                styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -100},
                    {gamma: 1.6} ] } ],
                center: new google.maps.LatLng(18.678794, 73.724998),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
        
            for (i = 0; i < locations.length; i++) {  
          
                marker = new google.maps.Marker({ 
                position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
                map: map ,
                icon: 'images/marker.png'
                });
        
        
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
            })(marker, i));
        }
    })(jQuery);
</script>

