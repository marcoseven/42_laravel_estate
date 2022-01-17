@extends('layouts.app')


@section('page-title', 'Houses')


@section('content')

<section class="house">

    <img src="{{$house->image}}" class="img-fluid">

    <h3>{{$house->address}}</h3>

</section>

@endsection
