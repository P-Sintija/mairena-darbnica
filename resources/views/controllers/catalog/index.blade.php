@extends('layouts.main')

@section('content')

    <section id="category-menu">
        <category-menu :category-data=" {{ json_encode($categoryMenu) }}"
        ></category-menu>
    </section>

    <section id="catalog-grid">
        <catalog-grid></catalog-grid>
    </section>

@endsection

