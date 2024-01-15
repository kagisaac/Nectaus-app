@extends('dashLayout')

@section('content')
<!-- ====contact section start ==== -->
<section class="contact section" id="contact">
    <div class="container">

        <!-- <main class="table" id="customers_table"> -->
        <div class="section-title padd-15">
            <h2>Inspection Report</h2>
            <a href="/addInspections"><button> Add info</button></a>

        </div>

        <!-- <section class="table__header">
            <h1>Inspection Report</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>

            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section> -->
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

                    @foreach(optional($inspectionData)->all() as $inspects)
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
        <script src="/js/tableScript.js"></script>
        <!-- </main> -->
    </div>
</section>
<!-- ====contact section ends ==== -->

@endsection