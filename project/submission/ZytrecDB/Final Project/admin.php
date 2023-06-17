<?php 
include("dbconnect.php");
// include 'intelsession.php';
// if(!session_id())
// {
//     session_start();
// }
include 'headeradmin.php';
?>

    <!-- Header Start -->
        <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
            <div class="row align-items-center px-3">
                <div class="col-lg-6 text-center text-lg-left"><br><br>
                    <h4 class="text-white mb-4 mt-5 mt-lg-0">Kids Learning Center</h4>
                    <h1 class="display-3 font-weight-bold text-white">New Approach to Kids Education</h1>
                    <p class="text-white mb-4">As a preparation for entering kindergarten, our preschool will assist children in developing critical social skills. Additionally, the significance of play, discovery, and hands-on learning is emphasised by our preschool.Lastly, but certainly not least, our preschool will assist in the growth of a child's cognitive, emotional, physical, and social skills throughout those crucial formative years. As a result, a strong foundation for lifelong learning will be established.</p>
                    <br><br>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <img class="img-fluid mt-3" src="img/intellectlogo.jpeg" alt="" width="500px" height="auto"><br><br>
                </div>
            </div>
        </div>
    <!-- Header End -->
    <div class="container-fluid row pt-3 d-flex justify-content-center">
        <!--Left section start-->

        <!--Left section end-->
        <!--Middle section start-->
        <div class="container-fluid pt-5">
            <!--Middle section first row start-->
            <!--Middle section  first row end-->
            <!--Middle section second row start-->
            <!--Class section start-->
            <!-- <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
                    <h1 class="mb-4">Classes for Your Kids</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <img class="card-img-top mb-2" src="img/class1.jpg" alt="" height="350">
                            <div class="card-body text-center">
                                <h4 class="card-title">Little Explorer</h4>
                                <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                            </div>
                            <div class="card-footer bg-transparent py-4 px-5">
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                    <div class="col-6 py-1">3 - 6 Years</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                    <div class="col-6 py-1">40 Seats</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                    <div class="col-6 py-1">08:00 - 10:00</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 py-1 text-right border-right"><strong>Tution Fee</strong></div>
                                    <div class="col-6 py-1">$290 / Month</div>
                                </div>
                            </div>
                            <a href="registerstudent.php" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <img class="card-img-top mb-2" src="img/class-2.jpg" alt="">
                            <div class="card-body text-center">
                                <h4 class="card-title">Fun KindyLand</h4>
                                <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                            </div>
                            <div class="card-footer bg-transparent py-4 px-5">
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                    <div class="col-6 py-1">3 - 6 Years</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                    <div class="col-6 py-1">40 Seats</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                    <div class="col-6 py-1">08:00 - 10:00</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 py-1 text-right border-right"><strong>Tution Fee</strong></div>
                                    <div class="col-6 py-1">$290 / Month</div>
                                </div>
                            </div>
                            <a href="registerstudent.php" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Class End --> 

        <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Announcement</span></p>
                <h1 class="mb-4">What happen today!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
            <?php
            $sql = "SELECT * FROM tb_announcement";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                 echo '<div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="text-primary mr-3">'.$row['anc_title'].'</h3>
                            <p>'.$row['anc_desc'].'</p>
                        </div>
                    </div>';
            }
            ?>

           
                <!-- <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-2.jpg" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-3.jpg" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-4.jpg" style="width: 70px; height: 70px;" alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Our Teachers</span></p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/roza.jpeg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-blogger"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Roza</h4>
                    <i>English, Mandarin, Pendidikan Islam/Moral, Science Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/fir.jpeg" alt="">
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Fir</h4>
                    <i>Arabic, Jawi, Maths Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%; object-fit: contain;">
                        <img class="img-fluid w-100" src="img/yani.jpeg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Yani</h4>
                    <i>Bahasa Melayu, Jawi, Maths Teacher</i>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Gallery</span></p>
                <h1 class="mb-4">School Activities!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel text-center">
                <?php
                $sqla = "SELECT * FROM tb_actupdate ORDER BY activity_id DESC LIMIT 10";
                $resulta = mysqli_query($con, $sqla);
                while($rowa = mysqli_fetch_array($resulta)){
                    echo '<div class="testimonial-item team px-3">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                            <img class="img-fluid w-100" src="image/'.$rowa['activity_filename'].'" alt="" >
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                    href="https://www.facebook.com/intellect.islamic.playschool/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                        <h4>'.$rowa['activity_title'].'</h4>
                        <i>'.$rowa['activity_desc'].'</i>
                    </div>';
                }
                ?>
                <!-- <div class="testimonial-item px-3">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
                <div class="testimonial-item px-3">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
                <div class="testimonial-item px-3">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
                <div class="testimonial-item px-3">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        </div>
        <!--Middle section end-->
        <!--Right section start-->
        <!--Right section end-->
    </div>
    

<?php include 'footermain.php' ?>

</body>

</html>