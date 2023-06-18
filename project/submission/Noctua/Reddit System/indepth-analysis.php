<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>In-Depth Analysis | Noctua</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/horizontal-menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h1 class="mb-sm-0 font-size-18">Redditors Post Analysis</h1>
                        </div>
                        <p>
                            The analysis of Reddit posts related to Anwar Ibrahim, Malaysia's 10th Prime Minister, reveals fascinating insights into the engagement and discussions surrounding this political figure. 
                            The data shows that a particular post titled "Anwar Ibrahim is the 10th PM" garnered an exceptional amount of attention, with over 600 comments, which is 15 times the average number of comments for a single Reddit post. 
                            This post became a hot topic for users to express their opinions, leading to a significant influx of comments. Additionally, the chart illustrates that the number of comments surged notably after October, particularly as the General Election (GE) approached. 
                            The comment count reached its peak in mid-to-late November, coinciding with Anwar Ibrahim's swearing-in as the Prime Minister. Even after the event, the comments remained substantial until the end of the analyzed period.
                            <hr>
                        </p>
                    </div>
                </div>
                <!-- end page title -->
                <html>
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive col-sm-12">
                                    <div class="row">
                                        <iframe style="background: #FFFFFF;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);" width="600" height="480" src="https://charts.mongodb.com/charts-madinasuraya-ltfud/embed/charts?id=648cb537-4651-4986-840a-d66c52e842a1&maxDataAge=3600&theme=light&autoRefresh=true"></iframe>
                                            
                                    </div>
                                    <hr>
                                    <div>
                                        <p>
                                            In this chart, we gathered 10 posts with the most comments. The post “Anwar Ibrahim is the 10th PM” takes first place with more than 600 comments in a single post. 
                                            This post alone has 15 times the average comments in a single Reddit post. 
                                            The post becomes quite a hot topic for people to share their opinions regarding the issue which results in a massive amount of comments. 
                                        </p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive col-sm-12">
                                    <div class="row">
                                    <iframe style="background: #FFFFFF;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);" width="640" height="480" src="https://charts.mongodb.com/charts-madinasuraya-ltfud/embed/charts?id=648ca889-e711-49e2-88bf-c3021292a68f&maxDataAge=3600&theme=light&autoRefresh=true"></iframe>
                                            <div>
                                                <p><hr>
                                                From the chart above, we can see that number of comments becomes much more significant after October. 
                                                As the GE draws nearer, the number of comments towards DSAI increases over time. 
                                                The number of comments skyrocketed in mid-to-late November which was during the time DSAI was sworn in as the PM. 
                                                After the event, the number of comments reduces but still keeps a significant number until the end of our findings. 
                                                <hr></p>
                                            </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive col-sm-12">
                                    <iframe style="background: #FFFFFF;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);" width="360" height="350" src="https://charts.mongodb.com/charts-madinasuraya-ltfud/embed/charts?id=648ca467-bd3e-4525-8a0b-877623a64e3a&maxDataAge=3600&theme=light&autoRefresh=true"></iframe>
                                    <iframe style="background: #FFFFFF;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);" width="420" height="350" src="https://charts.mongodb.com/charts-madinasuraya-ltfud/embed/charts?id=648cb3cf-4651-4942-80ae-d66c52e7403d&maxDataAge=3600&theme=light&autoRefresh=true"></iframe>
                                    <iframe style="background: #FFFFFF;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);" width="390" height="350" src="https://charts.mongodb.com/charts-madinasuraya-ltfud/embed/charts?id=648ca302-52cc-41b0-890a-5819d6500576&maxDataAge=3600&theme=light&autoRefresh=true"></iframe>        
                                    <div>
                                        <span><hr>
                                            <p>Left - we try to find the distribution of score and number of user. The score is calculated by subtracting upvotes and downvotes. We found that the majority of users: 3206, lies between 0-100 in terms of score, followed by 156 with the score of 100-200.</p>
                                            <p>Mid - the relationship between average score for a post against the range of comments can be seen in the chart. A post with more average score will have a higher range of comments as seen in the gradual increase in the chart</p>
                                            <p>Right - we try to find the sum of score based on types. As seen in the chart, comments have almost 60,000 in more sum of score compared to posts. This could be due to the fact there would be 39x more comments than there are posts.</p>
                                            <p>Summary - from the three charts, most of the users would have a score of 0-100 while the average score for a post would have a steady increase in the range of comments with respect to an increase of average score. By looking at the third chart, we can see that the bulk of the score accumulated originates from comments instead of posts. </p>
                                            
                                            <hr>
                                        </span>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Conclusion on the Analysis</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive col-sm-12">
                                    <p> 
                                    In conclusion, the analysis of the Reddit posts related to Anwar Ibrahim provides valuable insights into the engagement and discussions among users. The distribution of scores and number of users reveals that the majority of users fall within the score range of 0-100, indicating a wide range of opinions and engagement levels. Moreover, the relationship between the average score of a post and the range of comments demonstrates that posts with higher average scores tend to attract a larger number of comments, suggesting a correlation between the quality of content and user engagement. Lastly, the sum of scores based on types reveals that comments accumulate significantly more scores compared to posts, indicating the greater impact and contribution of comments to the overall discussion. These findings shed light on the dynamics of online conversations surrounding Anwar Ibrahim and provide valuable insights into user behavior and engagement patterns.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                </html>






            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>