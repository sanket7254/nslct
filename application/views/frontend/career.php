<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<?php if ($this->session->flashdata('success')): ?>
        <script>
            swal({
                title: "Done",
                text: "<?php echo $this->session->flashdata('success'); ?>",
                icon: "success",
                timer: 1500,
                showConfirmButton: false,
                type: 'success'
            });
        </script>
<?php endif; ?>
<section id="page-header" class="section background customheader">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Career With US</h3>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="customblogsection section section-grey makenopaddingtop">
    <div class="container">
        <div id="post-wrapper" class="row">
            <div id="content" class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div id="grid" class="row">
                    <div class="box col-md-12 col-sm-12 clearfix">
                        <div class="post-image">
                            <img src="assets/upload/single_blog.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="box-desc">
                            <div class="blog-meta">
                                <div class="blog-description">
                                    <h3>Career Opportunities of NSL Construction Technology</h3>
                                    <blockquote>If you are looking for an opportunity to learn about and contribute to the engineering, construction and sector in India to leverage your strengths and positively develop your weakness, a prospect to take on substantial responsibility, to lead new initiatives and grow quickly with an organization. This is your beast platform. We are always on a lookout for hardworking, motivated and talented candidates. Being a civil engineering company. Our priority is Structural Rehabilitation work. We are looking for below roles,  </blockquote>

                                    <h6>Engineer Supervisor Forman</h6>

                                    <p>Since we are a rapidly growing organization, the opportunities for growth of employees are multifold and immensely exciting. All candidates must be prepared to embrace all opportunity, responsibility and challenges that come their way.</p>

                                    <p><img src="assets/upload/single_blog_01.jpg" alt="" class="single alignleft">Our company offers extensive "On-the-Job" training. We always look within our own rank to promote people into new positions and impart more responsibilities. As our company continues to grow. We also look like our employees to grow with us. This lead to the betterments of both the company and individuals within the organization.<br><br>Job positions for gaining in knowledge in construction industry. Attractive salary and excellent benefit package offered. Employees in civil works need to be prepared to work rigorous hours from time to time and, to travel sites if required.<br><br>That said we cannot do without our proficient terms in Business Development, Marketing and Human Resources and we are always on the lookout hire these roles.</p>
                                    <br>

                                    <p>We have a flat organizational hierarchy With an easy going and open culture. The higher management is easily accessible to address any all employee need and grievances.
                                    <br><br> <b>Notes:-</b> All Contact Add Both Mobile & Email Address.</p>
                                    <hr>

                                </div><!-- end description -->
                            </div><!-- end blog meta -->
                        </div><!-- end desc -->

                        <div class="commentbox clearfix">
                            <div class="comment-title">
                                <h5>Feel free to leave your thought here</h5>
                                <hr>
                            </div><!-- end title -->

                            <div class="comment-list">
                                <form id="commentform" class="row" name="contactform" method="post" enctype="multipart/form-data" action="HomeController/careerinfo">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required> 
                                        <input type="text" name="email" id="email1" class="form-control" placeholder="Email" required> 
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                                        <input type="file" name="resume" class="form-control">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="comments" id="comments" rows="8" placeholder="Message Below"></textarea>
                                        <div class="pull-right">
                                            <button type="submit" value="SEND" id="submit" class="btn btn-primary">SUBMIT</button>
                                        </div>
                                    </div>
                                </form> 
                            </div><!-- end comment-list -->
                        </div><!-- end commentbox -->
                    </div><!-- end box -->
                </div><!-- end grid -->

            </div><!-- end content -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->