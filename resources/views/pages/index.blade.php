@extends('layouts.app')
@section('content')
    <div class="container" >
        <article id="main-col">
        <h1>Visit Music Sites</h1>
    <div class=wrapper>
        <Video Autoplay Controls>
            <Source src="vidoes/vidoe1.mp4" type="video/mp4">
        </video>
</div>
<div class="jumbotron text-center">
    <h1>Visit Music Site </h1>
    <p>This is Laravel application from "Sujan Shrestha".</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>

@endsection
