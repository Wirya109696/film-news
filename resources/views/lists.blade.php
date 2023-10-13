@extends('layouts.main')

@section('container')
<article>
<h2>{{$list['title']}}</h2>
<h5>{{$list['author']}}</h5>
<p>{{$list['body']}}</p>
</article>

<a href="/list">Back To List</a>
@endsection