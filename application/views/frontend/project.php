<style>
#more1 {display: none;}
#more2 {display: none;}
#more3 {display: none;}
</style>
<section id="page-header" class="section background">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Projects</h3>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section section-grey">
    <div class="container">
        <div id="post-wrapper" class="row">
            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                <div class="blog-list-wrapper">

                    <div class="box clearfix">
                        <div class="box-image">
                            <img src="assets/upload/blog_02.jpg" class="alignleft" alt="">
                        </div>
                        <div class="box-desc">
                            <div class="blog-meta leftarrow">
                                <h6>Kunal Icon Podium Waterproofing</h6>
                                <p>Kunal Icon Podium Waterproofing is the one of the succefull project completed by NSL Construction Technology. Kunal Icon Podium is fully satisfied with Waterproofing service provided by NSL Construction Technology.<span id="dots1">...</span><span id="more1">After that we got so many projects in same field. Now we are expert in this field of work. NSL Construction deals with the solution for any kind of Industrial and Commercial Projects. More Focus is On Safety and Environmental factors which are most essential for the globalization. Every Project runs under the expertise and highly skilled Professionals with strong organisation team and balanced workforce.</span><label onclick="myFunction('dots1','more1','myBtn1')" id="myBtn1" style="color: blue;">Read more</label></p>
                            </div><!-- end blog meta -->
                        </div><!-- end desc -->
                    </div><!-- end box -->

                    <div class="box clearfix">
                        <div class="box-image">
                            <img src="assets/upload/blog_02.jpg" class="alignleft" alt="">
                        </div>
                        <div class="box-desc">
                            <div class="blog-meta leftarrow">
                                <h6>Complete Water Tanking of Tasty Bites Eatabals Pvt Ltd</h6>
                                <p>Complete Water Tanking of Tasty Bites Eatabals Pvt Ltd is the one of the succefull project completed by NSL Construction Technology. Tasty Bites Eatabals Pvt Ltd is fully satisfied with Waterproofing service provided by NSL Construction Technology. After that we got so many projects in same field. Now we are expert in this field of work.<span id="dots2">...</span><span id="more2">NSL Construction deals with the solution for any kind of Industrial and Commercial Projects. More Focus is On Safety and Environmental factors which are most essential for the globalization. Every Project runs under the expertise and highly skilled Professionals with strong organisation team and balanced workforce.</span><label onclick="myFunction('dots2','more2','myBtn2')" id="myBtn2" style="color: blue;">Read more</label></p>
                            </div><!-- end blog meta -->
                        </div><!-- end desc -->
                    </div><!-- end box -->

                    <div class="box clearfix">
                        <div class="box-image">
                            <img src="assets/upload/blog_02.jpg" class="alignleft" alt="">
                        </div>
                        <div class="box-desc">
                            <div class="blog-meta leftarrow">
                                <h6>Other Highly Important Industrial Projects</h6>
                                <p>We have successfully completed many useful and highly important indusrial projects like JSW Steel Ltd Pen, Amba River Cock Ltd Pen, JSW Dharamtar Port Pvt Ltd Pen, JSW Cement Ltd Pen and many more useful projects.<br>We completed these projects before the customer's deadlines. All of these customers are fully satisfied with services provided by us.<span id="dots3">...</span><span id="more3">Our main focus is On Safety and Environmental factors which are most essential for the globalization. Every Project runs under the expertise and highly skilled Professionals with strong organisation team and balanced workforce.</span><label onclick="myFunction('dots3','more3','myBtn3')" id="myBtn3" style="color: blue;">Read more</label></p>
                            </div><!-- end blog meta -->
                        </div><!-- end desc -->
                    </div><!-- end box -->
                </div><!-- end blog-list-wrapper -->

                <!-- <nav class="text-left">
                    <ul class="pagination">
                        <li><a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                        <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav> -->

            </div><!-- end content -->

            <div id="sidebar" class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h6><span></span> LATEST POSTS</h6>
                    </div>
                    <div class="recent-post-widget">
                        <ul>
                            <li><h4>Annual Board Meeting</h4><p>Next Month</p>
                            <p>NSL Construction Technology is planning to arrange annual board meeting on next month.</p></li>
                            <li><h4>Technical Seminar</h4><p>Each Month</p>
                            <p>Technical Seminar arranged by NSL Construction Technology on many technical things like Epoxy Grouting, Hilti Anchiring Work, etc.</p></li>
                            <li><h4>Job Hiring in Company</h4><p>This Month</p>
                            <p>We have many technical, marketing, support and sale job opennings in our company. If you are really interested then please contact us through Contact Us page of this website.</p></li>
                        </ul>
                    </div><!-- end text-widget -->
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="widget-title">
                        <h6><span></span>Service Categories</h6>
                    </div>
                    <div class="list-widget">
                        <ul>
                            <li><a href="#">Hilti Anchoring Work</a></li>
                            <li><a href="#">Cement Pressure Grouting</a></li>
                            <li><a href="#">Epoxy Grouting</a></li>
                            <li><a href="#">Structural Rehabilition Work</a></li>
                            <li><a href="#">Core Cutting Work</a></li>
                            <li><a href="#">Column Encasing Work</a></li>
                        </ul>
                    </div><!-- end text-widget -->
                </div><!-- end widget -->

            </div><!-- end sidebar -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<script>
function myFunction(var1,var2,var3) {
  var dots = document.getElementById(var1);
  var moreText = document.getElementById(var2);
  var btnText = document.getElementById(var3);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>


