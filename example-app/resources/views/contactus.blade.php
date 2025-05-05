@extends('layouts.app')

@section('scripts')
    <script>
        alert("you are in Contact Page")
    </script>
@endsection

@section('content')
    <section class="section-content">
        <h2 class="section-content__title">Contact us</h2>
        <p class="section-content__text">This is a simple HTML and CSS template to start yout project</p>
    </section>
@endsection

@section('styles')
    <style>
        .section-content{
            color: red; 
        }
    </style>
@endsection