@extends('dashLayout')

@section('content')
<link rel="stylesheet" href="/css/addHiveStyle.css">
<div class="addHive-container">


    <h1>Add New Hive</h1>
    @if($errors->any())
    <ul>
        @foreach($errors-> all as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('create.Hive')}}" method="post">
        @csrf
        @method('post')
        <div class="addHive-row">
            <div class="addHive-col">
                <div class="form-group">
                    <label for="hiveSerialNumber">Hive SIN:</label>
                    <input type="text" id="hiveSN" name="hiveSN" required>
                </div>
                <div class="form-group">
                    <label for="deviceSIN">IoT Device SIN:</label>
                    <input type="text" id="deviceSN" name="deviceSIN" required>
                </div>
                <div class="form-group">
                    <label for="dimensions">Dimensions (L x W x H):</label>
                    <input type="text" id="dimensions" name="dimensions" required>
                </div>
            </div>
            <div class="addHive-col">
                <div class="form-group">
                    <label for="hiveOwner">Hive Owner:</label>
                    <input type="text" id="hiveOwner" name="hiveOwner" required>
                </div>

                <div class="form-group">
                    <label for="weight">Weight (lbs):</label>
                    <input type="number" id="weight" name="weight" required>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select id="status" name="status" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                </div>
            </div>
        </div>



        <button type="submit">Add Hive</button>
    </form>
</div>

@endsection