@extends('dashLayout')

@section('content')
<!-- ====services section starts ==== -->
<div>
    <section class="service section " id="services">
        <div class="container">
            <div class="row">
                <div class="section-title padd-15">
                    <h2>My Hive</h2>
                    <a href="/addHive"><button> Add Hive </button></a>

                </div>

            </div>


            <div class="row">
                <!-- ====item section starts ==== -->
                @foreach(optional($hives)->all() as $hive)
                <div class="service-item">
                    <div class="service-item-inner padd-15">
                        <div class="icon">

                            <i class="fa fa-brands fa-hive fa-bounce fa-xl"></i>
                        </div>
                        <div class=" card-row-data">

                            <p>Hive Serial Number:
                            </p>
                            <h4>{{$hive->hiveSN}}</h4>


                        </div>
                        <div class=" card-row-data">
                            <P>Hive Dimension: </P>

                            <h4>{{$hive->dimensions}}</h4>

                        </div>
                        <a href="{{route('display.displaySingleHive',['hiveId' => $hive])}}"><i class="fa-solid fa-eye"
                                style="color: #FFD43B;"></i><b>View more</b></a>

                    </div>

                </div>
                @endforeach

                <!-- ====item section ends ==== -->


            </div>
        </div>
    </section>
</div>
<!-- ====services section ends ==== -->
@endsection