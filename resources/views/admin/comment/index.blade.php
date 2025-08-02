@extends('admin.layouts.master')

@section('title', 'Dashboard')


@section('content')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Comments</h1>
        <div class="mb-2 btn-toolbar mb-md-0">
            <a role="button" href="#" class="btn btn-sm btn-success disabled">create</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of comments</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>user ID</th>
                    <th>post ID</th>
                    <th>comment</th>
                    <th>status</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td><a href="">{{ $loop->iteration }}</a>
                        </td>
                        <td>
                            {{ $comment->user->name }}
                        </td>
                        <td>
                            {{ $comment->post->title }}
                        </td>
                        <td>
                            {{ $comment->body }}
                        </td>
                        <td>

                            {{ $comment->status }}
                        </td>
                        <td>

                            @if ($comment->status == 'seen')
                                <form action="{{ route('admin.comments.approve', $comment->id) }}" class="d-inline"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-white btn btn-sm btn-success">Approve</button>
                                </form>
                            @elseif ($comment->status == 'approved')
                                <form action="{{ route('admin.comments.unapprove', $comment->id) }}" class="d-inline"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-white btn btn-sm btn-warning">Not Approved</button>
                                </form>
                            @endif


                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>

@endsection
