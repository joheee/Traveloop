@extends('layout.bootstrap')

@section('title', 'Traveloop is here!')

@section('content')

<div class="mt-4">
    <x-carousel :interval="2000" :images="[
    ['src' => 'hotel-1.jpg', 'title' => 'Amazing Beach', 'caption' => 'A serene view of the beach'],
    ['src' => 'hotel-2.jpg', 'title' => 'Mountain Escape', 'caption' => 'Perfect getaway in the mountains'],
    ['src' => 'hotel-1.jpg', 'title' => 'City Lights', 'caption' => 'Discover the vibrant city life']
]" />

</div>

@include('components.herohotel')

@include('components.diskonhotel')

@include('components.rekomenhotel')

@include('components.fasilitashotel')

@include('components.faq')

@endsection