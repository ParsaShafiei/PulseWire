@extends('admin.layouts.master')

@section('title', 'Post')


@section('content')

    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Articles</h1>
        <div class="mb-2 btn-toolbar mb-md-0">
            <a role="button" href="{{ route('admin.post.create') }}" class="btn btn-sm btn-success">create</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of posts</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>summary</th>
                    <th>view</th>
                    <th>status</th>
                    <th>user ID</th>
                    <th>cat ID</th>
                    <th>image</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            <a class="text-primary" href="">
                                {{ $loop->iteration }}
                            </a>
                        </td>
                        <td>
                            {{ $post->title }}
                        <td>
                            {{ Str::limit($post->summary, 20) }} </td>
                        <td>
                            {{ $post->view }}
                        </td>
                        <td>
                            @if ($post->breaking_news)
                                <span class="badge badge-success">#breaking_news</span>
                            @endif
                            @if ($post->selected)
                                <span class="badge badge-dark">#editor_selected</span>
                            @endif
                        </td>
                        <td>
                            {{ $post->user->name }}
                        </td>
                        <td>
                            {{ $post->category->name }}
                        </td>
                        <td><img style="width: 80px;" src="{{ $post->image }}" alt=""></td>
                        <td style="width: 25rem;">
                            <a role="button" class="text-white btn btn-sm btn-warning btn-dark"
                                href="{{ route('admin.post.breaking-news', $post) }}">
                                @if ($post->breaking_news)
                                    remove breaking news
                                @else
                                    add breaking news
                                @endif
                            </a>
                            <a role="button" class="text-white btn btn-sm btn-warning btn-dark"
                                href="{{ route('admin.post.selected', $post) }}">
                                @if ($post->selected)
                                    remove selcted
                                @else
                                    add selected
                                @endif
                            </a>
                            <hr class="my-1" />
                            <a role="button" class="text-white btn btn-sm btn-primary"
                                href="{{ route('admin.post.edit', $post) }}">edit</a>
                            <form action="{{ route('admin.post.destroy', $post) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button role="button" class="text-white btn btn-sm btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>


@endsection
