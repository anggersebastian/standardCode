@extends('layouts.main')
@section('content')
<div class="container">
    <h3>Data Karyawan</h3>
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#createForm">+ Create Karyawan</button><br><br>

    {{-- table index --}}
    <table class="table table-hover" style="text-align: center">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Team</th>
            <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($getKaryawan as $getKaryawans)
            <tr>
            <td>{{ $getKaryawans['id'] }}</td>
            <td>{{ $getKaryawans['name'] }}</td>
            <td>{{ $getKaryawans['email'] }}</td>
            <td>{{ $getKaryawans['phone'] }}</td>
            <td>{{ $getKaryawans['team'] }}</td>
            <td><a href="{{ action('KaryawanController@edit', $getKaryawans['id']) }}" class="btn btn-warning btn-sm">✏️ Edit</a></td>
            <td>
                <form action="{{ action('KaryawanController@destroy', $getKaryawans['id']) }}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger btn-sm" type="submit">❌ Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- form create --}}
    @extends('Karyawan.create') 
</div>
@endsection