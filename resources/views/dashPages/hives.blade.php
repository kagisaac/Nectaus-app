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
                        <h4>{{$hive->hiveOwner}}</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus a reprehenderit cum, vero
                        quos maxime aspernatur id ipsam in quae, quaerat, asperiores consectetur officiis quasi
                        fugiat harum libero repudiandae non.
                        <div><a href="{{route('display.displaySingleHive',['hiveId' => $hive])}}">view</a></div>
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