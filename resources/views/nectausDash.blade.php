<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/dashStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- ====main container start ==== -->
    <div class="main-container">
        <!-- ======== top nav bar container  =======  -->
        <div class="top-navBar">
            <div class="navbar">
                <div class="search-box">
                    <span>
                        <input type="text" class="search-input" placeholder="Search...">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
                <div class="icons">
                    <div class="notification-icon">
                        <!-- <img src="path/to/notification-icon.jpg" alt="Notification"> -->
                        <i class="fa-solid fa-bell fa-beat fa-2xl" style="margin-top: 0rem;"></i>
                        <span class="notification-badge">3</span>
                    </div>
                    <div class="profile-icon">
                        <img src="assets/linkdinPic.png" alt="Profile" style="width: 50px;height:50px">
                    </div>
                    <div class="userName">
                        <span>
                            <!-- <p>welcome</p> -->
                            <h3>Isaac</h3>
                        </span>
                        <i class="fa-solid fa-chevron-down fa-beat fa-sm" style="color: #7e7a07;"></i>
                    </div>
                </div>
            </div>

        </div>
        <!-- ======== End top nav bar container  =======  -->

        <!-- ====aside start ==== -->
        <div class="aside " id="aside">
            <div class="logo">
                <!-- <a href="#"><span>k@</span>isaac</a> -->
                <div class="log"><img src="{{asset('assets/nectausProLog2.png')}}" alt="log"
                        style="width: 100px;height:100px; ">
                </div>

            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">

                <li><a href="#about"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#about"><i class="fa-brands fa-hive"></i>My Hives</a></li>
                <li><a href="#services"><i class="fa-solid fa-pen-to-square"></i>Inspection</a></li>
                <li><a href="#portfolio"><i class="fa-regular fa-message"></i>Message</a></li>
                <li><a href="#contact"><i class="fa-solid fa-people-roof"></i>Community</a></li>
                <li><a href="#contact"><i class="fa-solid fa-newspaper"></i>News</a></li>
                <li><a href="#contact"><i class="fa-solid fa-gear"></i>Settings</a></li>
                <li><a href="#contact"><i class="fa-solid fa-right-from-bracket"></i>LogOut</a></li>




            </ul>
        </div>
        <!-- ====aside ends ==== -->

        <div class="main-content">
            <!-- ====Home section start ==== -->
            <!-- <section class="home section  ">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello, my name is <span>Kagenza Isaac</span></h3>
                            <h3 class="my-profession">I'm a <span class="typing">Web Developer</span></h3>
                            <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim
                                iriure.</p>
                            <a href="#contact" class="btn hire-me">Hire Me</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="../Myself/profile_san_background.png" alt="">
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- ====Home section ends ==== -->


            <!-- ======== home dash highlight ===== -->
            <div class="dashboard">
                <div class="card number-hives">
                    <h2>120</h2>
                    <p>Number of Bee Hives</p>
                </div>

                <div class="card inspection-status">
                    <h2>Good</h2>
                    <p>Inspection Status</p>
                </div>

                <div class="card hive-temperature">
                    <h2>25°C</h2>
                    <p>Hive Temperature</p>
                </div>

                <div class="card hive-humidity">
                    <h2>60%</h2>
                    <p>Hive Humiditydd</p>
                </div>
            </div>

            <!-- ======== End home dash highlight ===== -->

            <!-- ====About section start ==== -->
            <section class="about section " id="about">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>I'm Kagenza Isaac and <span>Web Developer</span></h3>
                                    <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent
                                        possim iriure.
                                        Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent
                                        possim iriure.
                                        Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent
                                        possim iriure.
                                        Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent
                                        possim iriure.
                                        Lisque persius interesset his et, in quot quidam persequeris vim, ad mea essent
                                        possim iriure.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>Birthday : <span>20 sep 2001</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Age : <span>21</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Website : <span>www.urwuri.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span>kagisaac103@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Degree : <span>BSc Computer Software Engineering</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Phone : <span>+250782290301</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>City : <span>Kigali, Kicukiro</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Freelnace : <span>Available</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="#" class="btn">Download Cv</a>
                                            <a href="#contact" class="btn hire-me">Hire Me</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="skills-item padd-15">
                                            <h5>REACT JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>
                                        </div>
                                        <div class="skills-item padd-15">
                                            <h5>HTML/CSS/JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 86%;"></div>
                                                <div class="skill-percent">86%</div>

                                            </div>

                                        </div>
                                        <div class="skills-item padd-15">
                                            <h5>UX/UI Design</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>

                                        </div>
                                        <div class="skills-item padd-15">
                                            <h5>NODE JS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 76%;"></div>
                                                <div class="skill-percent">76%</div>
                                            </div>

                                        </div>
                                        <div class="skills-item padd-15">
                                            <h5>PYTHON</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 70%;"></div>
                                                <div class="skill-percent">70%</div>
                                            </div>

                                        </div>
                                        <div class="skills-item padd-15">
                                            <h5>JAVA/C++/C</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 78%;"></div>
                                                <div class="skill-percent">78%</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="education padd-15">
                                    <h3 class="title">Education</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ======timeline item===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2021-2024

                                                    </h3>
                                                    <h4 class="timeline-title">BSc in Computer Software Engineering
                                                        <br>(University of Rwanda)
                                                    </h4>
                                                    <p class="timeline-text">
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                    </p>
                                                </div>
                                                <!-- ======timeline item===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2023-2023
                                                    </h3>
                                                    <h4 class="timeline-title">IOT, Software and Hardware development
                                                        <br>(STES Group ltd)
                                                    </h4>
                                                    <p class="timeline-text">
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                    </p>
                                                </div>
                                                <!-- ======timeline item===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2023-2023
                                                    </h3>
                                                    <h4 class="timeline-title">Google IT Automation with Python
                                                        Professional Certificate <br>(Coursera) </h4>
                                                    <p class="timeline-text">
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="experience padd-15">
                                    <h3 class="title">Experience</h3>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- ======timeline item===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2023-Present
                                                    </h3>
                                                    <h4 class="timeline-title">Software Developer <br>(STES Group) </h4>
                                                    <p class="timeline-text">
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                    </p>
                                                </div>
                                                <!-- ======timeline item===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2020-2021
                                                    </h3>
                                                    <h4 class="timeline-title">IT Support Specialist <br>(KHENZ LTD)
                                                    </h4>
                                                    <p class="timeline-text">
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                    </p>
                                                </div>
                                                <!-- ======timeline item===== -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2023-Present
                                                    </h3>
                                                    <h4 class="timeline-title">Urwuri Project <br>(STES Group) </h4>
                                                    <p class="timeline-text">
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                        Lisque persius interesset his et, in quot quidam persequeris
                                                        vim, ad mea essent possim iriure.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- ====About section ends ==== -->
            <!-- ====services section starts ==== -->
            <section class="service section " id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ====item section starts ==== -->
                        <div class="service-item">
                            <div class="service-item-inner padd-15">
                                <div class="icon">
                                    <i class="fa fa-mobile-alt "></i>
                                </div>
                                <h4>Web Developer</h4>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus a reprehenderit cum, vero
                                quos maxime aspernatur id ipsam in quae, quaerat, asperiores consectetur officiis quasi
                                fugiat harum libero repudiandae non.
                            </div>

                        </div>

                        <!-- ====item section ends ==== -->
                        <!-- ====item section starts ==== -->
                        <div class="service-item">
                            <div class="service-item-inner padd-15">
                                <div class="icon">
                                    <i class="fa fa-laptop-code "></i>
                                </div>
                                <h4>Web Developer</h4>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus a reprehenderit cum, vero
                                quos maxime aspernatur id ipsam in quae, quaerat, asperiores consectetur officiis quasi
                                fugiat harum libero repudiandae non.
                            </div>
                        </div>

                        <!-- ====item section ends ==== -->
                        <!-- ====item section starts ==== -->
                        <div class="service-item">
                            <div class="service-item-inner padd-15">
                                <div class="icon">
                                    <i class="fa fa-laptop-code "></i>
                                </div>
                                <h4>Web Developer</h4>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus a reprehenderit cum, vero
                                quos maxime aspernatur id ipsam in quae, quaerat, asperiores consectetur officiis quasi
                                fugiat harum libero repudiandae non.
                            </div>
                        </div>

                        <!-- ====item section ends ==== -->
                        <!-- ====item section starts ==== -->
                        <div class="service-item">
                            <div class="service-item-inner padd-15">
                                <div class="icon">
                                    <i class="fa fa-palette"></i>
                                </div>
                                <h4>Web Developer</h4>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus a reprehenderit cum, vero
                                quos maxime aspernatur id ipsam in quae, quaerat, asperiores consectetur officiis quasi
                                fugiat harum libero repudiandae non.
                            </div>
                        </div>

                        <!-- ====item section ends ==== -->
                        <!-- ====item section starts ==== -->
                        <div class="service-item">
                            <div class="service-item-inner padd-15">
                                <div class="icon">
                                    <i class="fa fa-search"></i>
                                </div>
                                <h4>Web Developer</h4>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus a reprehenderit cum, vero
                                quos maxime aspernatur id ipsam in quae, quaerat, asperiores consectetur officiis quasi
                                fugiat harum libero repudiandae non.
                            </div>
                        </div>

                        <!-- ====item section ends ==== -->
                        <!-- ====item section starts ==== -->
                        <div class="service-item">
                            <div class="service-item-inner padd-15">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Web Developer</h4>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus a reprehenderit cum, vero
                                quos maxime aspernatur id ipsam in quae, quaerat, asperiores consectetur officiis quasi
                                fugiat harum libero repudiandae non.
                            </div>

                        </div>

                        <!-- ====item section ends ==== -->
                    </div>
                </div>
            </section>
            <!-- ====services section ends ==== -->
            <!-- ====Portfolio section starts ==== -->
            <section class="portfolio section " id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Portfolio</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="portfolio-heading padd-15">
                            <h2>My Project</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ====Portfolio items starts ==== -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="../Myself/custom-duty.jpg" style="width: 100%; height:250px;" alt="">
                                </div>

                            </div>
                        </div>

                        <!-- ====Portfolio items ends ==== -->
                        <!-- ====Portfolio items starts ==== -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="../Myself/cow.jpg" style="width: 100%; height:250px;" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- ====Portfolio items ends ==== -->
                        <!-- ====Portfolio items starts ==== -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="../Myself/headway-5QgIuuBxKwM-unsplash.jpg"
                                        style="width: 100%; height:250px;" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- ====Portfolio items ends ==== -->
                        <!-- ====Portfolio items starts ==== -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="../Myself/fahim-muntashir-M02I8Ab_TT4-unsplash.jpg"
                                        style="width: 100%; height:250px;" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- ====Portfolio items ends ==== -->

                        <!-- ====Portfolio items starts ==== -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="../Myself/ben-kolde-bs2Ba7t69mM-unsplash.jpg "
                                        style="width: 100%; height:250px;" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- ====Portfolio items ends ==== -->
                        <!-- ====Portfolio items starts ==== -->
                        <div class="portfolio-item padd-15">
                            <div class="portfolio-item-inner shadow-dark">
                                <div class="portfolio-img">
                                    <img src="../Myself/sarah-dorweiler-QeVmJxZOv3k-unsplash.jpg"
                                        style="width: 100%; height:250px;" alt="">
                                </div>

                            </div>
                        </div>

                        <!-- ====Portfolio items ends ==== -->

                    </div>
                </div>


            </section>

            <!-- ====Portfolio section ends ==== -->

            <!-- ====contact section start ==== -->
            <section class="contact section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15 padd-15">
                            <h2>Contact Me</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15"> DO YOU HAVE ANY QUESTION?</h3>
                    <h4 class="contact-sub-title padd-15"> I'm At Your Services</h4>
                    <div class="row">
                        <!-- ====contact item start ==== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Call Us On</h4>
                            <p>+250782290301</p>
                        </div>
                        <!-- ====contact item end ==== -->
                        <!-- ====contact item start ==== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                            <h4>Office</h4>
                            <p>Kigali,Rwanda</p>
                        </div>
                        <!-- ====contact item end ==== -->
                        <!-- ====contact item start ==== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p>kagisaac103@gmail.com</p>
                        </div>
                        <!-- ====contact item end ==== -->
                        <!-- ====contact item start ==== -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-globe-europe"></i></div>
                            <h4>Website</h4>
                            <p>www.urwuri.com</p>
                        </div>
                        <!-- ====contact item end ==== -->

                    </div>

                    <h3 class="contact-title padd-15"> SEND ME AN EMAIL?</h3>
                    <h4 class="contact-sub-title padd-15"> I Respond to Each And Every Message Asap!</h4>
                    <!-- ====contact form start ==== -->
                    <div class="row">
                        <div class="contact-form padd-15">
                            <div class="row">
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-item col-6 padd-15">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <div class="form-group">
                                        <textarea name="" class="form-control" id=""
                                            placeholder="Text Your Message"></textarea>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-item col-12 padd-15">
                                    <button type="submit" class="btn">Send Message</button>
                                </div>
                            </div>


                        </div>
                        <!-- ====contact form ends ==== -->


                    </div>
            </section>
            <!-- ====contact section ends ==== -->




        </div>


    </div>
    <!-- ====main container ends==== -->
    <!-- ====javascript container ends==== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.16/typed.umd.js"
        integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>

</html>