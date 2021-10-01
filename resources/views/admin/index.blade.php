@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Wecome Admin!
                        <div class="row">
                            <div class="col-12 pt-2">
                                <div class="row">
                                    <div class="col-8">
                                        <h1 class="display-one">My Laravel Blog</h1>
                                        <p>Enjoy reading our posts. Click on a post to read!</p>
                                    </div>
                                    <div class="col-4">
                                        <p>Create new Post</p>
                                        <a href="/create" class="btn btn-primary btn-sm">Add Post</a>
                                    </div>
                                </div>
                                @forelse($posts as $post)
                                    <ul>
                                        <li><a href="./admin/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                                    </ul>
                                @empty
                                    <p class="text-warning">No blog Posts available</p>
                                @endforelse
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
