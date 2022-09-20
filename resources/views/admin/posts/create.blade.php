@extends('layouts.app')


@section('content')
    <div class="container mb-4 mt-2">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class="mt-3 mb-3 text-center table-title">Create new post</h1>
                <form class="text-white" action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    @include('admin.includes.form')
                    <div>
                        <button type="submit" class="btn btn-warning font-weight-bold">Add new</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
