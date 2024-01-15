@extends('dashLayout')

@section('content')
<link rel="stylesheet" href="/css/addHiveStyle.css">
<div class="addHive-container">


    <h1>Add New Hive Inspection</h1>
    <div>

        @if($errors->any())
        <ul>
            @foreach($errors-> all as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('create.inspection')}}" method="post">
        @csrf
        @method('post')
        <div class="addHive-row">
            <div class="addHive-col">
                <div class="form-group">
                    <label for="hiveSN">Hive SIN:</label>
                    <input type="text" id="hiveSN" name="hiveSN" required>
                </div>
                <div class="form-group">
                    <label for="temperature">Hive Temperature:</label>
                    <input type="number" id="temperature" name="temperature">
                </div>
                <div class="form-group">
                    <label for="hiveSN">Humidity :</label>
                    <input type="number" id="humidity" name="humidity">
                </div>
                <div class="form-group">
                    <label for="Weight">Weight :</label>
                    <input type="number" id="Weight" name="weight">
                </div>
            </div>
            <div class="addHive-col">
                <div class="form-group">
                    <label for="soundIntensity">SoundIntensity</label>
                    <input type="text" id="soundIntensity" name="soundIntensity">
                </div>

                <div class="form-group">
                    <label for="deseases">Deseases:</label>
                    <input type="text" id="deseases" name="deseases">
                </div>
                <div class="form-group">
                    <label for="summary">Summary:</label>
                    <input type="text" id="summary" name="summary">
                </div>
                <div class="form-group">
                    <label for="healthStatus">Hive Health Status:</label>
                    <select id="healthStatus" name="healthStatus">
                        <option value='healthy'>healthy</option>
                        <option value='good'>good</option>
                        <option value='moderate'>moderate</option>
                        <option value='bad'>bad</option>
                        <option value='creitical'>critical</option>

                    </select>
                </div>
            </div>
        </div>



        <button type="submit">Add Inspection</button>
    </form>
</div>

@endsection