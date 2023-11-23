

@extends('layouts.app') 
@section('title', 'Admin Dashboard')
@section('content')

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                <a href="{{ route('admin.dashboard') }}"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">ADmin DashBoard</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('admin.post') }}" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            All Post
                        </a>
                    </li>
                </ul>
                <hr>

            </div>
        </div>
        <div class="col-9">
            <div class="container">
                <h1>Create Post</h1>
                <form action="{{ route('admin.update',$post->id) }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Title:</label>
                        <input type="text" value="{{ $post->title }}"  name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group  mb-3">
                        <label for="content">Content:</label>
                        <textarea name="content" id="content" class="form-control" rows="4" required>{{ $post->title }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



