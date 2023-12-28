@extends('dashLayout')

@section('content')
<!-- ====contact section start ==== -->
<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15 padd-15">
                <h2>My Inspection</h2>
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
                            <textarea name="" class="form-control" id="" placeholder="Text Your Message"></textarea>

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

@endsection