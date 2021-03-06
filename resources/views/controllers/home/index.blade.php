@extends('layouts.main')

@section('content')

    <section id="hero-grid">
        <hero-grid
            hero-image="{{ $heroImage }}"
            :hero-data=" {{ json_encode($pageData) }}"
        ></hero-grid>
    </section>

    <section id="category-grid">
        <category-grid></category-grid>
    </section>

@endsection

