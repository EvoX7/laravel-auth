@extends('layouts.app')


@section('content')
    <div class="container mb-4 mt-2">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class="mt-3 mb-3 text-center">Create new post</h1>
                <form class="font-weight-bold" action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    @include('admin.includes.form')
                    <a class="btn btn-success font-weight-bold"
                    href="{{ route('admin.posts.index', $post->id) }}">Add new</a>
                </form>
            </div>
        </div>
    </div>
@endsection
