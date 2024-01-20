@extends('dashLayout')

@section('content')


<!-- ====About section start ==== -->
<section class="about section " id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Hive Insight</h2>
            </div>
        </div>
        <!-- ======== home dash highlight ===== -->
        <div class="row"></div>
        <div class="dashboard ">
            <div class="card number-hives ">
                <h2>{{ $hivesCount }}</h2>
                <p>Number Of Hives</p>
            </div>
            <div class="card healthyHive ">
                <h2>{{ $healthyHiveCount }}</h2>
                <p>Healthy Hives</p>
            </div>
            <div class="card CriticalHive">
                <h2>{{$criticalHiveCount}}</h2>
                <p>Critical Hives</p>
            </div>



            <div class="card hive-temperature">
                <h2>{{$newTemperature}}°C</h2>
                <p>Hive Temperature</p>
            </div>

            <div class="card number-hives">
                <h2>{{$totalHiveWeight}} Kg</h2>
                <p>Total Hive Weight</p>
            </div>
        </div>

        <!-- ======== End home dash highlight ===== -->

        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>Quick Summary of the <span>Hive Condition</span></h3>
                        <p>Glance at essential information. This concise overview includes details such as the hive's
                            serial number, name, owner, and physical dimensions. Additionally, it highlights the weight
                            of the hive, its current location, and any specific descriptions provided. The summary is
                            designed for easy interpretation, allowing beekeepers to swiftly grasp the key attributes of
                            each hive at a glance. This user-friendly dashboard empowers beekeepers with the necessary
                            insights to make informed decisions and efficiently manage their apiaries.</p>
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


            </div>
        </div>
    </div>
</section>
<!-- ====About section ends ==== -->
@endsection