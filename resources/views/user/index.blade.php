@extends('layouts.app')
@section('title', 'User  Dashboard')
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
                <tbody>
                    <tbody>
                        @php
                            $iterate = 1;
                        @endphp
            
                      
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row" class="text-center">{{ $iterate++ }}</th>
                                    <td class="text-center">{{ $post->title }}</td>
                                    <td class="text-center">{{ $post->content }}</td>
                                </tr>
                            @endforeach
                      
            
            
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
