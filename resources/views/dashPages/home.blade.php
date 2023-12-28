@extends('dashLayout')

@section('content')

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
                <h2>Hive Insight</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>Quick Summary of the<span>Hive Condition</span></h3>
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
                    <!-- <div class="personal-info padd-15">
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
                                </div> -->

                    <canvas id="myChart" style="width:100%;max-width:600px;">

                    </canvas>

                    <script>
                    const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
                    const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                fill: false,
                                lineTension: 0,
                                backgroundColor: "rgba(0,0,255,1.0)",
                                borderColor: "rgba(0,0,255,0.1)",
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        min: 6,
                                        max: 16
                                    }
                                }],
                            }
                        }
                    });
                    </script>
                    <div class="skills padd-15">
                        <div class="row">
                            <div class="skills-item padd-15">
                                <h5>Colonny strength</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 76%;"></div>
                                    <div class="skill-percent">76%</div>
                                </div>
                            </div>
                            <div class="skills-item padd-15">
                                <h5>Growth Rate</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 86%;"></div>
                                    <div class="skill-percent">86%</div>

                                </div>

                            </div>
                            <div class="skills-item padd-15">
                                <h5>Prouction Rate</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 76%;"></div>
                                    <div class="skill-percent">76%</div>
                                </div>

                            </div>
                            <div class="skills-item padd-15">
                                <h5>Mass Rate</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 76%;"></div>
                                    <div class="skill-percent">76%</div>
                                </div>

                            </div>
                            <div class="skills-item padd-15">
                                <h5>Health Rate</h5>
                                <div class="progress">
                                    <div class="progress-in" style="width: 70%;"></div>
                                    <div class="skill-percent">70%</div>
                                </div>

                            </div>
                            <div class="skills-item padd-15">
                                <h5>Pollination Efficiency </h5>
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
@endsection