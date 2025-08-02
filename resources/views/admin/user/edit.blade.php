@extends('admin.layouts.master')

@section('title', 'Users')


@section('content')

    <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">Edit User</h1>
    </section>

    <section class="my-3 row">
        <section class="col-12">

            <form method="post" action="{{ route('admin.user.update', $user) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter title ..."
                        value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter title ..."
                        value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter title ..."
                        value="" disabled>
                </div>

                <div class="form-group">
                    <label for="permission">permission</label>
                    <select name="permission_id" id="permission_id" class="form-control" required autofocus>
                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->id }}"
                                {{ $permission->id == $user->permission_id ? 'selected' : '' }}>
                                {{ $permission->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">update</button>
            </form>

        </section>
    </section>


@endsection
