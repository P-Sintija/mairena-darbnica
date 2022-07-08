@extends('layouts.main')

@section('content')

    <div id="hero-grid">
        <hero-grid
                   hero-image="{{ $heroImage }}"
        ></hero-grid>
    </div>

    @include('controllers.home.sample.one-6')

@endsection

