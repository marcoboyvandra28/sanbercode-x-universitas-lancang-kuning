@extends('layouts.master')

@section('title')
    Edit Cast
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="post">
    {{-- vaLidation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{-- form input --}}
    @csrf
    @method('put')
    <div class="form-group">
        <label>Cast Name</label>
        <input type="text" class="form-control" name="nama" value=" {{ $cast->nama}} "> 
    </div>
    <div class="form-group">
            <label>Cast Umur</label>
            <input type="number" class="form-control" name="umur" value="{{ $cast->umur}}">
    </div>
    <div class="form-group">
         <label>Cast Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10"> {{ $cast->bio}} </textarea>
            </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection