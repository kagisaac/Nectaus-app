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


        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="personal-info padd-15">
                        <div class="row">
                            <div class="info-item padd-15">
                                <p>Hive Serial Number: <span>{{$hiveId->hiveSN}}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>IoT Device Installed: <span>Nectaus tracker</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Device Serial number: <span>{{$hiveId->deviceSIN}}</span></p>
                                </p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Hive Dimensions: <span>{{$hiveId->dimensions}}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Hive Initial Weight: <span>{{$hiveId->weight}}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Hive Status: <span>{{$hiveId->status}}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Hive Location: <span>Kigali, Kicukiro</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Hive Owner : <span>{{$hiveId->hiveOwner}}</span></p>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="buttons padd-15">
                                <a href="#" class="btn">Download Cv</a>
                                <a href="#contact" class="btn hire-me">Hire Me</a>

                            </div> -->
                    </div>
                </div>




            </div>


        </div>
    </div>
    <div class="row">
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Hive SIN <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hive Temperature <span class="icon-arrow">&UpArrow;</span></th>
                        <th> humidity<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hive Weight<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Health Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> deseases <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hive Notice<span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach(optional($singleHiveInspectionData)->all() as $inspects)
                    <tr>
                        <td> {{ $inspects->hiveSN}}</td>
                        <td>{{ $inspects->temperature}}C</td>
                        <td> {{ $inspects->humidity}} </td>
                        <td> {{ $inspects->weight}}</td>
                        <td>
                            <p class="status {{ $inspects->healthStatus}}">{{ $inspects->healthStatus}}</p>
                        </td>
                        <td> <strong>{{ $inspects->deseases}} </strong></td>
                        <td> {{ $inspects->summary}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </section>
    </div>

    </div>
</section>
<!-- ====About section ends ==== -->
@endsection