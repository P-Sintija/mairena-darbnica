@extends('layouts.main')

@section('content')

    <div id="hero-grid">
        <hero-grid
            hero-image="{{ $heroImage }}"
        ></hero-grid>
    </div>

    <div id="category-grid">
        <category-grid></category-grid>
    </div>

@endsection

