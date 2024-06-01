@extends('layouts.master')

@section('title')
    Detail Cast
@endsection

@section('content')
    <h1>{{$cast->nama}}</h1>
    <h2>{{$cast->umur}}</h2>
    <p>{{$cast->bio}}</p>
    <a href="/cast" class="btn tbn-sm btn-secondary">Kembali</a>
@endsection