@extends('layouts.app')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                <table class="table table-secondary table-striped">
                    <thead>
                        <th scope="col">Id</th>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Content</th>
                        <th scope="col">Date</th>
                        <th class="px-3" scope="col">Edit</th>
                        <th class="px-3" scope="col">Delete</th>
                    </thead>
                    <tbody>


                        {{-- <a href="{{ route('posts.show', $post->id) }} --}}
                            {{-- {{ route('posts.edit', $post->id) }} --}}
                            {{-- {{ route('posts.destroy', $post->id) }} --}}


                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td class="fw-bold">
                                        {{ $post->author }}</a>
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->post_img }}</td>
                                <td>{{ $post->post_content }}</td>
                                <td>{{ $post->post_date }}</td>
                                <td>
                                    <a class="btn btn-warning fw-bold"
                                        href="">Edit</a>
                                </td>
                                <td>
                                    <form class="text-white" action=""
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger fw-bold">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h3 class="fs-1 text-center mt-5 text-white">No posts available</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
