<footer class="footer">
        <div id="newsletter" class="container">
            <div class="newsletterform wow slideInUp">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="exampleInputEmail2">Get<br>
                        <span>Connect</span><br>with us.</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email here.">
                    </div>
                    <button type="submit" class="btn btn-dark">Subscribe</button>
                </form>
            </div><!-- end row -->
        </div><!-- end container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h6><a href="index-2.html"><img src="assets/images/icon.jpg" alt="" style="height: 60px;"></a></h6>
                        </div>
                        <div class="text-widget">
                            <p>                      
                               NSL Construction Technology is a specialist contractor in Structural Rehabilitation, Waterproofing, Anchoring work, Concrete cutting work etc.We are the Civil Contracting Company.
                            </p>
                        </div><!-- end text-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-sm-8 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h6>Contact Info<span>&nbsp;<i class="fa fa-phone" aria-hidden="true"></i></span></h6>
                        </div>
                        <div class="text-widget">
                            <ul>   
                                <li>NSL Construction Technology, Inc.</li>
                                <li>B-12, KM Park, Near Kohali Gas Agency, Dehu Road,Pune- 412 101</li>
                                <li>Phone: +91 81496 73601<br>Email: support@nslct.in</li>
                                <li>http://www.nsltc_constructions.com</li>
                            </ul>
                        </div><!-- end text-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-sm-8 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h6>Locations<span>&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i></span></h6>
                        </div>
                        <div class="list-widget">
                            <ul>
                                <li><a href="#">NSL Headbranch Pune</a></li>
                                
                            </ul>
                        </div><!-- end text-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyright">
        <div class="container text-center">
            <div class="social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div><!-- end social -->
            <div class="copymessage">
                <p>2018 NSL Construction Technology. Designed with <i class="fa fa-heart-o"></i> from Mavericks TechnoLabs(India) Pvt. Ltd.</p>
            </div><!-- end copymessage -->
        </div><!-- end container -->
    </div><!-- end copyright -->
</div><!-- end wrapper -->
        
    <!-- Template core JavaScript's
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/contact.js"></script>

    <script type="text/javascript">
(function($) {
    "use strict";
        $(window).load(function(){
            $('.portfolio').isotope({
                  itemSelector : '.item',
                    layoutMode : 'fitRows'
            });
            $('#filters a.selected').trigger("click");
        });
        $('#filters a').click(function(e){
            e.preventDefault();

            var selector = $(this).attr('data-option-value');
            $('.portfolio').isotope({ filter: selector });

            $(this).parents('ul').find('a').removeClass('selected');
            $(this).addClass('selected');
        });
        jQuery(document).ready(function($) {
      
            $(window).resize();
            $Filter.find('a').click(function(){
                $Filter.find('ul li').not($(this)).removeClass('active');
                $(this).parent('li').addClass('active');
            });
        });
        jQuery('a[data-gal]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('gal'));
        });     
        jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'dark_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
    })(jQuery);
</script>



</body>
</html>