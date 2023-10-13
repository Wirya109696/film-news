@extends('layouts.main')

@section('container')
    @foreach ($list as $item)
    <link rel="stylesheet" href="css/style.css">
    <h2>
        <a href="/list/{{ $item["slug"]}}">{{$item["title"]}}</a>
    </h2>
    <h5>By : {{$item["author"]}}</h5>
    <p>{{$item["body"]}}</p>
    
    @endforeach
@endsection