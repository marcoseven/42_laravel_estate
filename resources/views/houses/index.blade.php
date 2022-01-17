@extends('layouts.app')


@section('page-title', 'Houses')


@section('content')

<h1>Our Houses</h1>

<div class="container-fluid">
    <section class="houses row row-cols-4 gy-4">
    <!-- All houses here -->

    @forelse($houses as $house)

    <div class="col">
        <div class="card house">
            <div class="card-img">
                <img src="{{$house->image}}" class="img-fluid">
            </div>
            <div class="card-body text-black-50">
                <h3>{{$house->address}}</h3>

                <a href="{{route('house', ['house' => $house->id])}}"> Vist this place</a>
            </div>

        </div>
    </div>
    @empty

    <p>Nothing to see here sorry</p>

    @endforelse

</section>
</div>


@endsection
