@extends('layouts.app')

@section('scripts')
    <script>
        alert("hi");
    </script>
@endsection

@section('content')
    <section class="section-content">
        <h2 class="section-content__title">About us</h2>
        <p class="section-content__text">This is a simple HTML and CSS template to start yout project</p>
        <p>
            Name: {{ $name }}
        </p>
        <p>
            Id: {{ $id }}
        </p>
    </section>
@endsection

@section('styles')
    <style>
        .section-content {
            color: red;
        }
    </style>
@endsection
