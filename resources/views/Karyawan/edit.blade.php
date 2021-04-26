@extends('layouts.main')
@section('content')
<div class="container">
    <form method="POST" action="{{ action('KaryawanController@update', $id) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" for="name" id="name" value="{{ $editKaryawan->name }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{ $editKaryawan->email }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Phone</label>
            <input type="number" class="form-control" name="phone" id="exampleFormControlInput1" value="{{ $editKaryawan->phone }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1" name="team" value="{{ $editKaryawan->team }}">
                <option value="DS">DS</option>
                <option value="IT">IT</option>
                <option value="Operational">Operational</option>
                <option value="Finance">Finance</option>
                <option value="Shipping">Shipping</option>
            </select>
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</div>
@endsection