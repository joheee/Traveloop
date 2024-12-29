@extends('layout.bootstrap')

@section('title', 'Traveloop is here!')

@section('header')

<div>
    <x-carousel :interval="2000" :images="[
    ['src' => 'hotel-1.jpg', 'title' => 'Amazing Beach', 'caption' => 'A serene view of the beach'],
    ['src' => 'hotel-2.jpg', 'title' => 'Mountain Escape', 'caption' => 'Perfect getaway in the mountains'],
    ['src' => 'hotel-1.jpg', 'title' => 'City Lights', 'caption' => 'Discover the vibrant city life']
]" />
</div>

@endsection

@section('content')

@include('components.herohotel')

@include('components.diskonhotel')

@include('components.rekomenhotel')

@include('components.fasilitashotel')

@include('components.faq')

@endsection