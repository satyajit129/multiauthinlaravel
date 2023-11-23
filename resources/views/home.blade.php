@extends('layouts.app')
@section('title', 'User Dashboard')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
            <table class="table">
                <div class="heading d-flex justify-content-between">
                    <h5>All Post</h5>
                    
                </div>
        
                <hr>
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Sl No</th>
                        <th scope="col" class="text-center">Title</th>
                        <th scope="col" class="text-center">Content</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
    {{-- <table class="table">
        <div class="heading d-flex justify-content-between">
            <h5>All Post</h5>
            <a href="{{ route('admin.create') }}" class="btn btn-sm btn-success flex-righ">Add New Post</a>
        </div>

        <hr>
        <thead>
            <tr>
                <th scope="col" class="text-center">Sl No</th>
                <th scope="col" class="text-center">Title</th>
                <th scope="col" class="text-center">Content</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $iterate = 1;
            @endphp

            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row" class="text-center">{{ $iterate++ }}</th>
                        <td class="text-center">{{ $post->title }}</td>
                        <td class="text-center">{{ $post->content }}</td>
                        <td class="text-center">
                            @if ($post->status == 0)
                                <span>Pending</span>
                            @else
                                <span>Active</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('admin.edit', $post->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <a href="{{ route('admin.destroy', $post->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No posts found.</td>
                </tr>
            @endif


        </tbody>
    </table> --}}
@endsection
