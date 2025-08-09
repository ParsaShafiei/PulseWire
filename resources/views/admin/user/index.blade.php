@extends('admin.layouts.master')

@section('title', 'Users')


@section('content')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h5"><i class="fas fa-newspaper"></i> Users</h1>
        <div class="mb-2 btn-toolbar mb-md-0">
            <a role="button" href="#" class="btn btn-sm btn-success disabled">create</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>permission</th>
                    <th>created at</th>
                    <th>setting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td>{{ $user->name }}</td>
                        <td> {{ $user->email }} </td>
                        <td>Password</td>
                        <td>
                            @if ($user->is_admin == 1)
                                Admin
                            @else
                                User
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            @if ($user->is_admin == 1)
                                <a role="button" class="text-white btn btn-sm btn-warning"
                                    href="{{ route('admin.user.changestatus', $user) }}">click not to be
                                    admin</a>
                            @elseif ($user->is_admin == 0)
                                <a role="button" class="text-white btn btn-sm btn-success"
                                    href="{{ route('admin.user.changestatus', $user) }}">click to be
                                    admin</a>
                            @endif
                            <a role="button" class="text-white btn btn-sm btn-primary"
                                href="{{ route('admin.user.edit', $user) }}">edit</a>


                            <form action="{{ route('admin.user.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-white btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
