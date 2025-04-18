@extends('layouts.app')

@section('title', 'Home | My Blog')

@section('content')
<!-- Hero Section -->
<div class="hero bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4">Welcome to My Blog</h1>
        <p class="lead">A place to share your thoughts</p>
    </div>
</div>

<!-- Posts Grid -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">First Post</h5>
                    <p class="card-text">This is a sample blog post.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection